<?php
include('conexion/conexion.php');
	$idpro=$_POST['id'];
	$idDoc=$_POST['idDoc'];
	if($_POST['fecha']>0){
		$fecha=$_POST['fecha'];
	}else{
		$fecha="null";
	}
	
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; 
			$source = $_FILES["archivo"]["tmp_name"][$key];
			$extension=pathinfo($filename, PATHINFO_EXTENSION);
			$directorio = 'Documentos/'; 			
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			$dir=opendir($directorio); 
			$target_path = $directorio.'proveedor'.$idpro.'_documento'.$idDoc.'.'.$extension; 
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
				//echo "insert into DetalleProveedorDocumento values (0,'$idpro','$idDoc',now(),'$fecha','$target_path')";
				if($_POST['fecha']>0){
					$r=$db ->query("insert into DetalleProveedorDocumento values (0,'$idpro','$idDoc',now(),'$fecha','$target_path')");
				}else{
					$r=$db ->query("insert into DetalleProveedorDocumento values (0,'$idpro','$idDoc',now(),null,'$target_path')");
				}
				
				
				//$numero++;
				//$control=1;
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
			header('location:documentos.php');
		}
	}
	
?>
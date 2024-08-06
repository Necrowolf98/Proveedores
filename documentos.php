
<?php
include 'conexion/conexion.php';
include 'cabecera.php';
session_start();
if(!isset($_SESSION['usuarioId'])){
  header('location:index.php');
}
$categoria= $_SESSION['categoriaId'];
$idProve=$_SESSION['usuarioId'];
?>
<script>
    function validarFormulario(){
        if (document.getElementById('archivo[]').value=="")
          {
              alert('Por favor elija un documento');
          return false;
          }else{
          return true;
          }

      }
</script>
<h1>Administracion de Documentos </h1>

<!--tablas listar docente-->
<div class="form-control">
	<br>
  <table class="table table responsive" style="margin-top: 10px;">
  <thead >
    <tr>
      <th scope="col">Documento</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha Caducidad</th>
      
      <th scope="col" style="text-align: center;">Cargar</th>
    </tr>
  </thead>
  <tbody>
    
<?php
  $query="SELECT DetalleCategoriaDocumento.idDetCategoriaDoc,CategoriaProducto.Categoria,Documento.Documento,DetalleCategoriaDocumento.idDocumento FROM DetalleCategoriaDocumento INNER JOIN CategoriaProducto on DetalleCategoriaDocumento.idCategoria=CategoriaProducto.idCategoria INNER join Documento On Documento.idDocumento=DetalleCategoriaDocumento.idDocumento where CategoriaProducto.idCategoria='$categoria'";
  //echo $query;
  $enviar=mysqli_query($db,$query);
  $ver=mysqli_fetch_array($enviar);
  do{
    if ($ver['idDetCategoriaDoc']>0) {
        $queryC="select * from DetalleProveedorDocumento where idProveedor='$idProve' and idDocumento='".$ver['idDocumento']."';";
        $enviarC=mysqli_query($db,$queryC);
        $verC=mysqli_num_rows($enviarC);
        //echo $queryC;
      echo'
      <tr>
      <td style="text-align: left;font-size:11px">'.$ver['Documento'].'</td>';
      if($verC>0){
        $verC2=mysqli_fetch_array($enviarC);
        echo'<td style="text-align:center;"><a href="'.$verC2['Documento'].'"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 464H96v48H64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V288H336V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z"/></svg></a></td>
        <form name="form" id="form1" method="post" action="guardarDocumento.php"  enctype="multipart/form-data" onsubmit="return validarFormulario()">
        ';
        if($ver['idDocumento']==2){
          echo '<td><input type="hidden" name="fecha" class="form-control"requiered value="'.$verC2['FechaCaducidad'].'"> </td> 
        ';  
        }else{
            echo '<td><input type="date" name="fecha" class="form-control"requiered value="'.$verC2['FechaCaducidad'].'"> </td> 
        ';
        }
      
      }else{
        echo'<td style="text-align: left;font-size:11px">Sin Ingresar</td>
        <form name="form" id="form1" method="post" action="guardarDocumento.php" enctype="multipart/form-data" onsubmit="return validarFormulario()">';
      if($ver['idDocumento']==2){
          echo '<td><input type="hidden" name="fecha" class="form-control"requiered value="'.$verC2['FechaCaducidad'].'"> </td> 
        ';  
        }else{
            echo '<td><input type="date" name="fecha" class="form-control"requiered value="'.$verC2['FechaCaducidad'].'"> </td> 
        ';
        }
      }
      echo'
      
      <td>
    
                   <center>
                   <input type="hidden" class="form-control"style="width:200px;" name="id" value="'.$idProve.'">
                   <input type="hidden" class="form-control"style="width:200px;" name="idDoc" value="'.$ver['idDocumento'].'">
                       <input type="file" class="form-control" id="archivo[]" name="archivo[]" accept="application/pdf" requiered style="width:200px;">
                       </section>';
                       //$query30="select * from preguntasvisita where preId=".$ver3['id']." and visId=$aid";
                       //$enviar30=mysqli_query($db,$query30);  
                       //$ver30=mysqli_num_rows($enviar30);
                       //if ($ver30>0) {
                        // echo '<h5>Respuesta Guardada</h5>';
                       //}else{
                         echo '<button type="submit" class="btn btn-primary" style="white-space: nowrap;">Guardar</button>';
                       //}
             echo'
                   </center>                            
                   </form>
      </td>
    </tr>
    ';
    }
    
  }while ( $ver=mysqli_fetch_array($enviar)); 
?>
  
  </tbody>
</table>

<footer style="width:100%">
	    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2023 Copyrigth Caterfood Todos los derechos reservados.</p>
      </div>
    </div>
	</footer>
    
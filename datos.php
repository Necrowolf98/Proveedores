<?php 
  include 'cabecera.php';
  include('conexion/conexion.php');
  session_start();
  if(!isset($_SESSION['usuarioId'])){
    header('location:index.php');
  }
  $queryP="select * from Proveedor where IdProveedor=".$_SESSION['usuarioId'];
  $enviarP=mysqli_query($db,$queryP);
 $verP=mysqli_fetch_array($enviarP);
 if (isset($_POST['enviar'])) {
  $ciudadId=$_POST['ciudad'];
  $tipoId=$_POST['tipo'];
  $categoriaId=$_POST['categoria'];
  $razon=$_POST['razonSocial'];
  $nombre=$_POST['nombre'];
  $ruc=$_POST['ruc'];
  $direccion=$_POST['direccion'];
  $representante=$_POST['representante'];
  $contactoVenta=$_POST['contactoVenta'];
  $contactoCalidad=$_POST['contactoCalidad'];
  $emailVenta=$_POST['emailVenta'];
  $emailCalidad=$_POST['emailCalidad'];
  $telefono=$_POST['telefono'];
  $pagina=$_POST['pagina'];
  $idPro=$_SESSION['usuarioId'];
  $query="update Proveedor set  idCiudad='$ciudadId',IdTipoProveedor='$tipoId',idCategoria='$categoriaId',RazonSocial='$razon',NombreComercial='$nombre',Ruc='$ruc',Direccion='$direccion',RepresentanteLegal='$representante',ContactoVenta='$contactoVenta',ContactoCalidad='$contactoCalidad',EmailVenta='$emailVenta',EmailCalidad='$emailCalidad',Telefono='$telefono',PaginaWeb='$pagina' where IdProveedor='$idPro'";

  echo $query;
  $enviar=mysqli_query($db,$query);
  header('location:datos.php');
 } 

 ?>
 <br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Proveedor</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<div class="card">
  <div class="card-body">
    <center>
    <form action="" class="form_contact" method="post">
  <div class="container">
  
    <div class="col">
    <label for="names">Ciudad</label>
    </div>
    <div class="col">
    <select class="form-control" name="ciudad">
                  <?php
                    $query="select * from Ciudad";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idCiudad=$ver['idCiudad'];
                      $ciudad=$ver['Ciudad'];
                      if($idCiudad==$verP['idCiudad']){
                         echo '
                      <option value="'.$idCiudad.'" selected>'.$ciudad.'</option>
                      '; 
                      }
                      else{
                          echo '
                      <option value="'.$idCiudad.'">'.$ciudad.'</option>
                      ';
                      }
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
    </div>
    <div class="col">
    <label for="phone">Tipo Proveedor</label>
    </div>
    <div class="col">
    <select class="form-control" name="tipo">
                  <option value="0">Seleccione:</option>
                  <?php
                    $query="select * from TipoProveedor";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idTipoProveedor=$ver['IdTipoProveedor'];
                      $tipo=$ver['Tipo'];
                      if($idTipoProveedor==$verP['IdTipoProveedor']){
                        echo '
                      <option value="'.$idTipoProveedor.'" selected>'.$tipo.'</option>
                      '; 
                      }
                      else{
                       echo '
                      <option value="'.$idTipoProveedor.'">'.$tipo.'</option>
                      ';
                      }
                      
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
    </div>
 
 
    
    <div class="col">
    <br>
    <label for="phone">Categoria</label>
                
    </div>
    <div class="col">
    <select class="form-control" name="categoria">
                  <option value="0">Seleccione:</option>
                  <?php
                    $query="select * from CategoriaProducto";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idCategoria=$ver['idCategoria'];
                      $categoria=$ver['Categoria'];
                      if($idCategoria==$verP['idCategoria']){
                        echo '
                      <option value="'.$idCategoria.'" selected>'.$categoria.'</option>
                      ';
                      }
                      else{
                      echo '
                      <option value="'.$idCategoria.'">'.$categoria.'</option>
                      ';
                      }
                      
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
    </div>
    <div class="col">
    <br>
    <label for="password">Razon Social</label>
    </div>
    <div class="col">
      <br>
    <input type="text" class="form-control" placeholder="" name="razonSocial"required="" value="<?php echo $verP['RazonSocial']?>">
    </div>
 
  
    
    <div class="col">
  
    <label for="phone">Nombre Comercial</label>             
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="nombre"required=""value="<?php echo $verP['NombreComercial']?>">
    </div>
    <div class="col">
    
    <label for="password">RUC</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="ruc"required=""value="<?php echo $verP['Ruc']?>">

    </div>
  
  
    
    <div class="col">
  
    <label for="phone">Direccion</label>             
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="direccion"required=""value="<?php echo $verP['Direccion']?>">
    </div>
    <div class="col">
    
    <label for="password">Representante Legal</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="representante"required=""value="<?php echo $verP['RepresentanteLegal']?>">

    </div>
  
    <div class="col">
    <label for="password">Contacto Venta</label>            
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="contactoVenta"required=""value="<?php echo $verP['ContactoVenta']?>">         
    </div>
    <div class="col"> 
    <label for="password">Contacto Calidad</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="contactoCalidad"required=""value="<?php echo $verP['ContactoCalidad']?>">
    </div>
  
    <div class="col">
    <label for="password">Email Venta</label>           
    </div>
    <div class="col">
    <input type="email" class="form-control" placeholder="" name="emailVenta"required=""value="<?php echo $verP['EmailVenta']?>">        
    </div>
    <div class="col"> 
    <label for="password">Email Calidad</label>
    </div>
    <div class="col">
    <input type="email" class="form-control" placeholder="" name="emailCalidad"required=""value="<?php echo $verP['EmailCalidad']?>">
    </div>
  
    <div class="col">
    <label for="password">Telefono</label>          
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="telefono"required=""value="<?php echo $verP['Telefono']?>">
      
    </div>
    <div class="col"> 
    <label for="password">Pagina Web</label>
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="" name="pagina" required="" value="<?php echo $verP['PaginaWeb']?>">

    </div>
    <input type="submit" value="Guardar Cambios" class="btn btn-block btn-primary" name="enviar" style="color:white;">
  </div>
</div>            
                
              
                
            
              

            </div>
        </form>
</center>
  </div>
</div>
<footer style="width:100%">
	    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2023 Copyrigth Caterfood Todos los derechos reservados.</p>
      </div>
    </div>
	</footer>

</body>
</html>

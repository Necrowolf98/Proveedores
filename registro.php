<?php 
  include('conexion/conexion.php');
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
    $query="insert into proveedor values (0,'$ciudadId','$tipoId','$categoriaId','$razon','$nombre','$ruc','$direccion','$representante','$contactoVenta','$contactoCalidad','$emailVenta','$emailCalidad','$telefono','$pagina','$ruc',now())";
    
    echo $query;
    $enviar=mysqli_query($db,$query);
    header('location:index.php');
    
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Registro</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/logo.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 >Proveedores <strong></strong></h3>
            <p class="mb-4">Registro de Proveedores</p>
            <form method="post">
              <div class="form-group last mb-3">
                <label for="password">Ciudad</label>
                <select class="form-control" name="ciudad">
                  <option value="0">Seleccione:</option>
                  <?php
                    $query="select * from ciudad";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idCiudad=$ver['idCiudad'];
                      $ciudad=$ver['Ciudad'];
                      echo '
                      <option value="'.$idCiudad.'">'.$ciudad.'</option>
                      ';
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Tipo Proveedor</label>
                <select class="form-control" name="tipo">
                  <option value="0">Seleccione:</option>
                  <?php
                    $query="select * from tipoProveedor";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idTipoProveedor=$ver['IdTipoProveedor'];
                      $tipo=$ver['Tipo'];
                      echo '
                      <option value="'.$idTipoProveedor.'">'.$tipo.'</option>
                      ';
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Categoria</label>
                <select class="form-control" name="categoria">
                  <option value="0">Seleccione:</option>
                  <?php
                    $query="select * from categoriaproducto";
                    $enviar=mysqli_query($db,$query);
                    $ver=mysqli_fetch_array($enviar);
                    do{
                      $idCategoria=$ver['idCategoria'];
                      $categoria=$ver['Categoria'];
                      echo '
                      <option value="'.$idCategoria.'">'.$categoria.'</option>
                      ';
                    }while($ver=mysqli_fetch_array($enviar));
                  ?>
                </select>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Razon Social</label>
                <input type="text" class="form-control" placeholder="" name="razonSocial"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Nombre Comercial</label>
                <input type="text" class="form-control" placeholder="" name="nombre"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">RUC</label>
                <input type="text" class="form-control" placeholder="" name="ruc"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Direccion</label>
                <input type="text" class="form-control" placeholder="" name="direccion"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Representante Legal</label>
                <input type="text" class="form-control" placeholder="" name="representante"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Contacto Venta</label>
                <input type="text" class="form-control" placeholder="" name="contactoVenta"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Contacto Calidad</label>
                <input type="text" class="form-control" placeholder="" name="contactoCalidad"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Email Venta</label>
                <input type="email" class="form-control" placeholder="" name="emailVenta"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Email Calidad</label>
                <input type="email" class="form-control" placeholder="" name="emailCalidad"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Telefono</label>
                <input type="text" class="form-control" placeholder="" name="telefono"required="">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Pagina Web</label>
                <input type="text" class="form-control" placeholder="" name="pagina" required="">
              </div>
              <input type="submit" value="Enviar" class="btn btn-block btn-primary" name="enviar">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
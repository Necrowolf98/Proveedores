<?php 
  include 'cabecera.php';
  session_start();
  if(!isset($_SESSION['usuarioId'])){
    header('location:index.php');
  }
 ?>
 <br>

<h1 style="font-size: 50px;background: linear-gradient(to bottom right, green, white);
  -webkit-background-clip: text;">Sistema de Registro de Proveedores </h1>
<h1 style="font-size: 50px;background: linear-gradient(to bottom right, green, white);
  -webkit-background-clip: text;">SRP </h1>
  <h1 style="font-size: 40px;background: linear-gradient(to bottom right, green, white);
  -webkit-background-clip: text;">Bienvenido: <?php echo $_SESSION['usuario']; ?>  </h1>
<img src="images/logom.jpg">
<footer style="position: absolute;
  bottom: 0;width:100%">
	    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2023 Copyrigth Caterfood Todos los derechos reservados.</p>
      </div>
    </div>
	</footer>




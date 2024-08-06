<?php 
  include 'cabecera.php';
  session_start();
  if(!isset($_SESSION['usuarioId'])){
    header('location:index.php');
  }
  $currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo-amerinode.png">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    footer {
      width: 100%;
    }
  </style>
</head>
<body>
  <main>
    <h1 style="font-size: 50px; background: linear-gradient(to bottom right, green, white); -webkit-background-clip: text;">Sistema de Registro de Proveedores</h1>
    <h1 style="font-size: 50px; background: linear-gradient(to bottom right, green, white); -webkit-background-clip: text;">SRP</h1>
    <h1 style="font-size: 40px; background: linear-gradient(to bottom right, green, white); -webkit-background-clip: text;">Bienvenido: <?php echo $_SESSION['usuario']; ?></h1>
    <img src="images/logom.jpg" alt="Logo">
  </main>
  <footer class="bg-light py-4">
    <div class="container text-center">
      <p class="text-muted mb-0 py-2">© <?php echo $currentYear; ?> Copyrigth Amerinode S.A Todos los derechos reservados.</p>
    </div>
  </footer>
</body>
</html>

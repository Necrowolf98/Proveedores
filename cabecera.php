<style type="text/css">
:root{
    --main-color:#fff;
  }
  
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  
  body{
    font-family:'Roboto' , 'sans-serif';
   
  }
  
  .main-header{
    background: rgb(0,51,26);
background: rgba(22,76,122,255);
    width: 100%;
    height:50px;
    
  }
  
  nav{
    position: absolute;
    left:0;
    top:0;
    width: 200px;
    top:50px;
    height:calc(100vh - 50px);
     background: rgb(0,51,26);
background: rgba(22,76,122,255); 
    transform:translateX(-100%);
    transition:.4s ease;
   z-index: 100;

  }
  
  .navigation li{
    list-style:none;
    width: 100%;
    border-bottom: 1px solid rgba(255,255,255,.5);
  }
  
  .navigation a{
    color:var(--main-color);
    display: block;
    line-height:3.5;
    padding: 0 10px;
    text-decoration:none;
    transition:.4s ease;
  }
  
  .navigation a:hover{
    transform:translateX(10%);
  }
  
  #btn-nav{
    display: none;
  }
  
  #btn-nav:checked ~ nav{
    transform:translateX(0);
  }
  .centrar{
    padding-left: 20%;
    padding-right: 20%;
  }
  .table{
    text-align: center;
  }
  .btn-nav{
    color:var(--main-color);
    font-size:30px;
    position: absolute;
    left:0;
    top:0;
    cursor:pointer;
    padding:6.5px 15px;
    transition:.2s ease;
   
  }
  
  .btn-nav:hover{
    background:rgba(0,0,0,.3);
  }
  </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <!--Css personalizado-->
    
</head>
<body class="text-center" >
    
    <header class="main-header">
  <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i></label>
  <input type="checkbox" id="btn-nav">
  
  <nav>
    <ul class="navigation">
      <li><a href="principal.php">Inicio</a></li>
      <li><a href="datos.php">Mis Datos</a></li>
      <li><a href="documentos.php">Documentos</a></li>
      <li><a href="cambiar.php">Cambiar Contraseña</a></li>
      <li><a href="salir.php">Salir</a></li>
    </ul>
  </nav>
  
</header>



    
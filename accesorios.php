<!DOCTYPE html>
<html lang="es">
<head>
  <title>ACCESORIOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/productos.css">
  <style>

    .row.content {height: 1500px}
    

    .sidenav {
      background-color: #00c3ff;
      height: 100%;
    }
    
    .h4{
      color: black;
    }

    footer {
      background-color: #00c3ff;
      color: white;
      padding: 15px;
    }
    

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    div{
      background-color: #DEDEDE;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <img src="img/logo.png" height="50" width="80">
      <!-- Logo -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">TECHNOGEEK</a></li>
        <li><a href="../TG/#Categorias">CATEGORIAS</a></li>
        <li><a href="#Productos">PRODUCTO</a></li>
        <li><a href="#Contacto">CONTACTO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MAS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModalIS">Inicio Sesion</a></li>
            <li><a data-toggle="modal" data-target="#myModalR">Registro</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>

    <?php
         if(!isset($_GET['producto'])){
         ?>
         <div id="slider"></div> 
        <?php
         require('productos.php');
        $producto->mostrar_index();
       }else{
       // require('productos.php');
       //  $producto->descripcion();
      ?>

 <?php
      }
      ?>
</body>
</html>

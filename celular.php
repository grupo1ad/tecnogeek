<!DOCTYPE html>
<html lang="es">
<head>
  <title>CELULARES</title>
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

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Productos</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">TechnoGeek</a></li>
        <li><a href="#section2">Registrarse</a></li>
        <li><a href="index.php">Volver</a></li>
        <li><a href="#section3"></a></li>
      </ul>
    <br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    <center>
    <div class="col-sm-9">
      <h4>RECIENTES</h4>
      <hr>
      <h2>Celulares</h2>
      <br><br>
      <?php
         if(!isset($_GET['producto'])){
         ?>
         <div id="slider"></div> 
        <?php
         require('productos.php');
        $producto->mostrar_i();
       }else{
       require('productos.php');
        $producto->descripcion();
      ?>
      </center>
      
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>TechnoGeek</p>
</footer>
<?php
      }
      ?>
</body>
</html>

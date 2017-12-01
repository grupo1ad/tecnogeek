<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
<?php
  session_start();
if(!isset($_SESSION['User'])){
  header("location: index.html");
}
?>
	<title>technogeek</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Technogeek</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>

        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
<ul class="nav navbar-nav navbar-right">
        <li><a href="fin_sesion.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['User']; ?></a></li>
      </ul>
    </div>
  </div>
</nav>	
<!-- administrador pagina como tal -->
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><?php echo $_SESSION['User']; ?></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Usuarios</a></li>
        <li><a href="nuevo_producto.php">Añadir Producto</a></li>
        <li><a href="modificarp.php">Modificar Productos</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div class="col-sm-12">
      <h2>Usuarios</h2>            
        <table class="table table-striped">
          <tr>
            <td>ID</td>
            <td>Usuario</td>
            <td>Correo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Identificacion</td>
            <td>Telefono</td>
            <td>Direccion</td>
            <td>Genero</td>
          </tr>
      <?php
      require("clases/conexion.php");
        class Usuarios extends Conexion{
              
        public function mostrar(){
            $consulta="SELECT * FROM usuario";
            $resultado=$this->conexion->query($consulta);
            while($row=mysqli_fetch_assoc($resultado)){
      ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['usuario'];?></td>
                  <td><?php echo $row['correo'];?></td>
                  <td><?php echo $row['nombre'];?></td>
                  <td><?php echo $row['apellido'];?></td>
                  <td><?php echo $row['identificacion'];?></td>
                  <td><?php echo $row['telefono'];?></td>
                  <td><?php echo $row['direccion'];?></td>
                  <td><?php echo $row['genero'];?></td>
                  <td><a href="clases/modificarU.php?id=<?php echo $row['id'];?>"><button class="btn" data-toggle="modal">
              <span class="glyphicon glyphicon-ok"></span> Modificar
            </button></a><tr>
                </tr>
            <?php
            }
          }
        }
          $Datos=new Usuarios();
          $Datos->conectar();
          $Datos->mostrar();
      ?>  
      </tbody>
            </table>
          </div>  
   </div>
  </div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</body>
</html>
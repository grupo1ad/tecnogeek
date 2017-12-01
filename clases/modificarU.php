<html>
<head>
<title>Modificar Registro</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <div class="col-sm-6"> 
    <h1>Actualizar Datos</h1>
  <?php
  require("conexion.php");

class Modifico extends Conexion{

public function modificar(){  
  $id = $_REQUEST['id'];
  $query="SELECT * FROM usuario WHERE id = '$id'";
  $resultado = $this->conexion->query($query);
  $row = $resultado->fetch_assoc();
  ?>
  <form method="POST" action = "guardarU.php?id=<?php echo $id;?>">          
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>Usuario</td><td><input type="text" name="usuario" value="<?php echo $row["usuario"];?>"></td>
                </tr>
                <tr>
                  <td>Correo</td><td><input type="email" name="mail" value="<?php echo $row["correo"];?>"></td>
                </tr>
                <tr>
                  <td>Nombre</td><td><input type="text" name="nombre" value="<?php echo $row["nombre"];?>"></td>
                </tr>
                <tr>  
                  <td>Apellido</td><td><input type="text" name="apellido" value="<?php echo $row["apellido"];?>"></td>
                </tr>
                <tr>  
                  <td>Identificacion</td><td><input type="text" name="identi" value="<?php echo $row["identificacion"];?>"></td>
                </tr>
                <tr>  
                  <td>Telefono</td><td><input type="text" name="tel" value="<?php echo $row["telefono"];?>"></td>
                </tr>
                <tr>  
                  <td>Direccion</td><td><input type="text" name="direc" value="<?php echo $row["direccion"];?>"></td>
                </tr>
                <tr>  
                  <td>Genero</td><td><input type="text" name="genero" value="<?php echo $row["genero"];?>" required/></td>
                </tr>
              </tbody>
            </table>
            <a href="guardarU.php"><button class="btn">
              <span class="glyphicon glyphicon-ok"></span> Modificar
            </button></a>
            <a href="adminitrador.php"><button class="btn">
              <span class="glyphicon glyphicon-ok"></span> Volver
            </button></a>
    </form>
  </div>';
  <?php
}
}
$modi=new Modifico();
$modi->conectar();
$modi->modificar();
?>
</body>
</html>
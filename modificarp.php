<html>
<head>
	<?php
  session_start();
if(!isset($_SESSION['User'])){
  header("location: index.html");
}
?>
<title>Modificar producto</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <div class="col-sm-6"> 
    <h1>Modificar productos</h1>


  <?php
  class Modifiar{

			 private $servidor="localhost";
			 private $usuario="root";
			 private $contrasena="";
			 private $based="technogeek";
			protected $conexion;

			public function conexiones(){

			 $this->conexion=mysqli_connect($this->servidor,$this->usuario,$this->contrasena,$this->based);
			 
			}
		public function mostrar(){
		 	$query="SELECT*FROM productos";
		 	$resultado=$this->conexion->query($query);
		 	while($row=mysqli_fetch_assoc($resultado)){
		 		?>
		 		<form method="POST" action = "guardarpro.php">          
		            <table class="table table-striped">
		              <tbody>
		                <tr>
		                	<td>Id</td><td><input type="hidden" name="id" value="<?php echo $row["id_productos"];?>"></td>

		                  <td>Nombre</td><td><input type="text" name="nombre_producto" value="<?php echo $row["nombre_producto"];?>"></td>
		                  <td>Codigo</td><td><input type="text" name="codigo" value="<?php echo $row["codigo"];?>"></td>
		              <td>Precio</td><td><input type="text" name="valor" value="<?php echo $row["valor"];?>"></td>

		              <td>IMAGEN</td><td><input type="text" name="Imagen" value="<?php echo $row["Imagen"];?>"></td>

							<td></select>
							       <label class="formulario">Estado</label>
							      <select required class="campo" name="estado">
							        <option></option>
							        <?php
							           $consultar='SELECT * FROM estados';
							           $resultados=mysqli_query($this->conexion,$consultar);
							           while ($row=mysqli_fetch_assoc($resultados)) {
							            echo "<option value='".$row['estado']."'>".$row['estado']."</option><br><br>";
							           }
							        ?>
		              </select></td>
		                  
		                </tr>
		                
		              </tbody>
		            </table>
		            <a href="guardarpro.php"><button class="btn">
		              <span class="glyphicon glyphicon-ok"></span> Modificar
		            </button></a>
		            <a href="adminitrador.php"><button class="btn">
		              <span class="glyphicon glyphicon-ok"></span> Volver
		            </button></a>
		    </form>
		  </div>
<?php
 	}

 }

  }

  $mostrador=new Modifiar;
  $mostrador->Conexiones();
  $mostrador->mostrar();

  ?>
  
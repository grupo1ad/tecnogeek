<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/productos.css">
</head>

<!--technogeek-->
<?php
error_reporting(0);
class Producto{
 private $servidor="localhost";
 private $usuario="root";
 private $contrasena="";
 private $based="technogeek";
protected $conexion;
	public	function Conexion(){
		$this->conexion=mysqli_connect($this->servidor,$this->usuario,$this->contrasena,$this->based);
		
	}
	public function Guardar(){

	    $this->codigo=$_GET['id_producto'];
		$this->codigo=$_POST['codigo'];
		$this->Nombre =$_POST['nombre_producto'];
		$this->Categoria=$_POST['categoria'];
		$this->marcas=$_POST['marcas'];
		$this->cantidad=$_POST['cantidad'];
		$this->Precio=$_POST['valor'];
	    $this->estado=$_POST['estado'];
		$nombre_imagen =$_FILES['imagen']['name'];
		$archivo_imagen =$_FILES['imagen']['tmp_name'];
		$tamano_imagen=$_FILES['imagen']['size'];
		$tipo_imagen=$_FILES['imagen']['type'];
		$ruta="imagenes";
		$ruta=$ruta."/".$nombre_imagen;
		$ruta=$ruta;
			if($tamano_imagen<=1000000){
				if($tipo_imagen=="image/jpeg"||$tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"){

					move_uploaded_file($archivo_imagen,$ruta);
			}
			}else{
				echo "el tamaño de la imagen excede el tamaño";
			}
		$insetar=("INSERT INTO `productos` (`id_productos`, `codigo`, `nombre_producto`, `categoria`, `marcas`, `cantidad`, `valor`, `estado`, `Imagen`) VALUES (NULL, '$this->codigo', '$this->Nombre' ,'$this->Categoria','$this->marcas', '$this->cantidad', '$this->Precio','$this->estado', '$ruta')");
		$resultado=$this->conexion->query($insetar);
		
		}
	
	
	
		public function Visualizar (){
			$consulta="SELECT productos.id_productos,marcas.nombre, categoria.Nombre_categoria, productos.nombre_producto,productos.Imagen, productos.valor FROM productos INNER JOIN categoria ON productos.categoria=categoria.id_categoria INNER JOIN marcas on productos.marcas=marcas.cod_marca";
			$resultado=$this->conexion->query($consulta);
		?>
			<table>
			<tr class="color2">
				<th>id_prod</th>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>Valor</th>
				<th>Estado</th>
				<th>Imagen</th>
				
			</tr>
         <?php
			$i=0;
			while($row=mysqli_fetch_assoc($resultado)){
				$i++;
				$R=$i%2;
				if($R==0){
					$color="color";
				}else{
					$color="0";
				}
				echo "<tr class='".$color."'>";
				echo '<td>'.$row['id_productos'].'</td>';
				echo '<td>'.$row['nombre_producto'].'</td>';
				echo '<td>'.$row['nombre'].'</td>';
				echo '<td>'.$row['valor'].'</td>';
				echo '<td>'.$row['estado'].'</td>';
				echo '<td>'.$row['Imagen'].'</td>';
				
			
			}
			echo"</tr></table>";
			//categorias++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
			// accesorios
		} public function mostrar_index(){
			
			$consulta="SELECT *FROM productos WHERE categoria=1 and estado='activo'";
			$resultado=$this->conexion->query($consulta);
			while($row=mysqli_fetch_assoc($resultado)){
			echo '<div id="mostrar"><img class="imagen" src="'.$row['Imagen'].'">';
			echo '<p class="nombre2">'.$row['nombre_producto'].'</p>';
			echo '<p class="nombre2">'.$row['estado'].'</p>';
			echo '<p class="precio">precio $'.$row['valor'].'</p>';
			$descripcion=$row['id_productos'];
			echo '<ul><li><a href="descripcion.php?producto='.$descripcion.'" class>descripcion</a></li><li></div>';
			}
		}
		//celulares 
		public function mostrar_i(){
			
			$consulta="SELECT *FROM productos WHERE categoria=2 and estado='activo'";
			$resultado=$this->conexion->query($consulta);
			while($row=mysqli_fetch_assoc($resultado)){
			echo '<div id="mostrar"><img class="imagen" src="'.$row['Imagen'].'">';
			echo '<p class="nombre2">'.$row['nombre_producto'].'</p>';
			echo '<p class="nombre2">'.$row['estado'].'</p>';
			echo '<p class="precio">precio $'.$row['valor'].'</p>';
			$descripcion=$row['id_productos'];
			echo '<ul><li><a href="descripcion.php?producto='.$descripcion.'" class>descripcion</a></li><li></div>';
			}
		}
         //computadores
         public function mostrar_n(){
			
			$consulta="SELECT *FROM productos WHERE categoria=3 and estado='activo'";
			$resultado=$this->conexion->query($consulta);
			while($row=mysqli_fetch_assoc($resultado)){
			echo '<div id="mostrar"><img class="imagen" src="'.$row['Imagen'].'">';
			echo '<p class="nombre2">'.$row['nombre_producto'].'</p>';
			echo '<p class="nombre2">'.$row['estado'].'</p>';
			echo '<p class="precio">precio $'.$row['valor'].'</p>';
			$descripcion=$row['id_productos'];
			echo '<ul><li><a href="descripcion.php?producto='.$descripcion.'" class>descripcion</a></li><li></div>';
			}
		}


		public function descripcion(){
			if(isset($_GET['producto'])){
				$this->producto=$_GET['producto'];
			$consulta="SELECT marcas.nombre, productos.Imagen, productos.nombre_producto, productos.valor,  FROM productos INNER JOIN marcas on productos.marcas=marcas.cod_marca WHERE id_productos ='$this->producto'";
			$resultado=$this->conexion->query($consulta);
			while($row=mysqli_fetch_assoc($resultado)){
			echo '<div id="descripcion_producto"><img class="imagen3" src="'.$row['Imagen'].'">';
			echo '<p class="titulos">'.$row['nombre_producto'].'</p>';
			echo '<p class="subtitulo">'.$row['valor'].'</p>';
			echo '<p class="precio2">'.$this->preciof=$row['Precio'].'</p>';
			echo '<p class="descripcion">'.$row['Descripcion'].'</p>';
			echo '</div>';
		
			}
			}
		}
			}
	$producto =new Producto;
	$producto->Conexion();
?>


</html>

<!DOCTYPE html>
<html>
<head>
  <?php
  session_start();
if(!isset($_SESSION['User'])){
  header("location: index.html");
}
?>
	<title>Agregar productos</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/añadir_producto.css">
  <link rel="stylesheet" type="text/css" href="productos.css">

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
  <br>
  <h3 class="text-center">technogeek </h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">registre nuevo producto</a></li>
    <li><a data-toggle="tab" href="#menu1"></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <center>
<h1>Ingrese el nuevo producto</h1></center>
  <div class="div">
   <form action="guardar.php" method="post" class="añadir" enctype="multipart/form-data" > 
      <label class="formulario">codigo del producto</label>
      <input type="text" name="codigo" class="campo"><br><br>
      <label class="formulario">Nombre del producto</label>
      <input type="text" name="nombre_producto" class="campo"><br><br>
      <label class="formulario">Marca del producto</label>
      <select required  class="campo" name="marcas">
        <OPTION></OPTION>
        <?php
        $servidor="Localhost";
        $usuario="root";
        $contrasena="";
        $based="technogeek";
          
        $conexion= mysqli_connect($servidor,$usuario,$contrasena,$based);
        $consulta='SELECT * FROM marcas';
        $resultado=mysqli_query($conexion,$consulta);
        while ($row=mysqli_fetch_assoc($resultado)) {
          echo $row['nombre'];
          echo "<option value='".$row['cod_marca']."'>".$row['nombre']."</option>";
        }
        ?>
      </select><br><br>
    
      <label class="formulario">Categoria</label>
       <select required class="campo" name="categoria">
        <option></option>
        <?php
           
           $conexion=mysqli_connect($servidor,$usuario,$contrasena,$based);
           $consultar='SELECT * FROM categoria';
           $resultados=mysqli_query($conexion,$consultar);
           while ($row=mysqli_fetch_assoc($resultados)) {
            echo "<option value='".$row['id_categoria']."'>".$row['nombre_categoria']."</option>";
           }
        ?>
       </select><br><br>
       <label class="formulario">Estado</label>
      <select required class="campo" name="estado"><br>
        <option></option>
        <?php
           
           $conexion=mysqli_connect($servidor,$usuario,$contrasena,$based);
           $consultar='SELECT * FROM estados';
           $resultados=mysqli_query($conexion,$consultar);
           while ($row=mysqli_fetch_assoc($resultados)) {
            echo "<option value='".$row['estado']."'>".$row['estado']."</option><br><br>";
           }
        ?>
     </select><br><br>
      
      <label class="formulario">Cantidad</label>
      <input type="text" name="cantidad" class="campo"><br><br>
      <label class="formulario">Precio</label>
      <input type="text" name="valor" class="campo"><br><br>
      <label class="formulario">Seleccione la imagen</label>
      <input type="file" name="imagen" class="campo"><br><br><br>

      <input type="submit"  value="Enviar" class="bottom">
   </form>
</div>
    </div>
      <div id="menu1" class="tab-pane fade">
        

        
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
<a href="adminitrador.php"><button>volver</button></a>
</footer>



</body>
</html>
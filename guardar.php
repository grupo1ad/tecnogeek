<?php
require('productos.php');
$producto->Guardar();
header('location: nuevo_producto.php');
?>
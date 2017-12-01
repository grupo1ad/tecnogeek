<?php
         if(!isset($_GET['producto'])){
         ?>
          <div id="slider"></div>
        <?php
         require('productos.php');
        $producto->mostrar_index();
       }else{
       require('productos.php');
        $producto->descripcion();
      ?>
<?php

}
?>
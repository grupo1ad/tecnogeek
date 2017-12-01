<?php
class Modificarpro{

 private $servidor="localhost";
 private $usuario="root";
 private $contrasena="";
 private $based="technogeek";
protected $conexion;

public function conexiones(){

 $this->conexion=mysqli_connect($this->servidor,$this->usuario,$this->contrasena,$this->based);
 
}
}

class Actualizacionpro extends Modificarpro{
  public $id;
  public $codigo;
  public $nombre;
  public $valor;
  public $estado;
  


public function guardarpro(){

    $this->id=$_POST['id'];
    $this->usuario=$_POST['codigo'];
    $this->nombre=$_POST['nombre_producto'];
    $this->valor=$_POST['valor'];
    $this->estado=$_POST['estado'];
    $this->Imagen=$_POST['Imagen'];



    $query="UPDATE `productos` SET `codigo` = '$this->usuario', `nombre_producto` = '$this->nombre',`valor` = '$this->valor',`estado` = '$this->estado',`Imagen` = '$this->Imagen' WHERE `productos`.`id_productos` = '$this->id';";
      $resultado=$this->conexion->query($query);

    if($resultado){
      header("location: adminitrador.php"); 
    }else{
      echo "no se registro";
    }
  }
}


$validar=new Actualizacionpro();
$validar->conexiones();
$validar->guardarpro();



  ?>


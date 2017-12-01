<?php
require("conexion.php");
class Actualizacion extends Conexion{
  public $id;
  public $usuario;
  public $cifrado;
  public $correo;
  public $nombre;
  public $apellido;
  public $identificacion;
  public $telefono;
  public $direccion;
  public $genero;


public function guardar(){
    $id=$_REQUEST['id'];
    $this->usuario=$_POST['usuario'];
    $this->correo=$_POST['mail'];
    $this->nombre=$_POST['nombre'];
    $this->apellido=$_POST['apellido'];
    $this->identificacion=$_POST['identi'];
    $this->telefono=$_POST['tel'];
    $this->direccion=$_POST['direc'];
    $this->genero=$_POST['genero'];

    $query="UPDATE usuario SET usuario='$this->usuario', correo='$this->correo',nombre='$this->nombre', apellido='$this->apellido', identificacion='$this->identificacion', telefono='$this->telefono', direccion='$this->direccion', genero='$this->genero' WHERE id = '$id'";
      $resultado=$this->conexion->query($query);

    if($resultado){

      header ("location: ../adminitrador.php"); 
    }else{
      echo "no se registro";
    }
  }
}
$validar=new Actualizacion();
$validar->conectar();
$validar->guardar();
?>
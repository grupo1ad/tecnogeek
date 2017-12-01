<?php
require("conexion.php");
class Usuario extends Conexion{
	public $usuario;
	public $password;
	public $cifrado;
	public $correo;
	public $nombre;
	public $apellido;
	public $identificacion;
	public $telefono;
	public $direccion;
	public $genero;


	public function registrar(){
		$this->usuario=$_POST['usuario'];
		$this->password=$_POST['pass'];
		$this->correo=$_POST['mail'];
		$this->nombre=$_POST['nombre'];
		$this->apellido=$_POST['apellido'];
		$this->identificacion=$_POST['identificacion'];
		$this->telefono=$_POST['tel'];
		$this->direccion=$_POST['direc'];
		$this->genero=$_POST['genero'];
		$this->cifrado=password_hash($this->password, PASSWORD_DEFAULT);// EL ARRAY ES PARA AUMENTAR EL COSTE DEL CIFRADO .

		$query="INSERT INTO `usuario` (`id`, `usuario`, `password`, `correo`, `nombre`, `apellido`, `identificacion`, `telefono`, `direccion`, `genero`) VALUES (NULL, '$this->usuario', '$this->cifrado', '$this->correo', '$this->nombre', '$this->apellido', '$this->identificacion', '$this->telefono', '$this->direccion', '$this->genero');";
			$resultado=$this->conexion->query($query);

		if($resultado){

			header ("location: ../index.html"); 
		}else{
			echo "no se registro";
		}
	}
}
$validar=new Usuario();
$validar->conectar();
$validar->registrar();
?>
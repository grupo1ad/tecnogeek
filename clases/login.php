<?php
require("conexion.php");

class Sesion extends Conexion{
	private $username;
	private $contrasena;

	public function ingresar(){
		$this->username=$_POST['usuario'];
		$this->contrasena=$_POST['pass'];

		//administrador

		$consulta="SELECT*FROM administrador WHERE usuario = '$this->username' ";
		$resultado=$this->conexion->query($consulta);
		while($fila=mysqli_fetch_assoc($resultado)){
			if(password_verify($this->contrasena,$fila['password'])){
			session_start();
			$_SESSION['User']=$_POST['usuario'];
			header("location: ../adminitrador.php");
			}else{
				header("location: ../index.html?usuario no existente");
			}
		}

		//usuario
		$consulta="SELECT*FROM usuario WHERE usuario = '$this->username' ";
		$resultado=$this->conexion->query($consulta);
		while($fila=mysqli_fetch_assoc($resultado)){
			if(password_verify($this->contrasena,$fila['password'])){
			session_start();
			$_SESSION['User']=$_POST['usuario'];
			header("location: usuario.php");
			}else{
				header("location: ../index.html?usuario no existente");
			}
		}
	}
}
$validar=new Sesion();
$validar->conectar();
$validar->ingresar();

?>
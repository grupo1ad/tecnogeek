<?php
require ('conexion.php');

class registro extends Conexion{
public $nombre;
public $password;
public $encriptacion;

	 public function capturar(){
		$this->nombre="administrador";
		$this->password="technogeek";
		$this->encriptacion=password_hash($this->password,PASSWORD_DEFAULT);
		parent:: __construct();
	}
	public function guardar(){
		$query=("INSERT INTO `administrador` (`id`, `usuario`, `contraseña`) VALUES (NULL, 'juan', 'vergara');");
		$resultado=$this->conexion->query($query);
		if($resultado){
			echo "se guardo los datos";
		}else{
			echo "error no se guardaron los datos";
		}
	}
}$registrador =new registro();
$registrador->capturar();
$registrador->guardar();

?>
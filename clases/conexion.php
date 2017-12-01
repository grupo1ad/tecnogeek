<?php
//conexion a la base de datos
class Conexion{
	protected $host;
	protected $user;
	protected $pass;
	protected $based;
	protected $conexion;

	public function conectar(){
		$this->host="Localhost";
		$this->user="root";
		$this->pass="";
		$this->based="technogeek";
		$this->conexion=mysqli_connect($this->host,$this->user,$this->pass,$this->based);
		if($this->conexion){
		//echo "conexion exitosa";
		}else{
		echo "error";
		}
	}
}
?>

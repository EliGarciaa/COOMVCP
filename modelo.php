<?php 
// creamos una nueva clase para guardar datos
class Guardar
{
	public $nombre;
	public $edad;
	function __construct($nombre, $edad)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
	}
	public function GuardarData(){
		$conexion = new mysqli("localhost", "root", "JehovaLeon", "Usuarios");
		$query = "INSERT into Users(Nombre, Edad) values ('$this->nombre', '$this->edad');";
		$conexion->query($query);
		$conexion->close();
	}
}

 ?>
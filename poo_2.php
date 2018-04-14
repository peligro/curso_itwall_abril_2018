<?php
class MiClase
{
	private $nombre;
	public $apellido;
	public $correo;
	public $telefono;

	//inicialización
	//se ejecuta cuando se crea la instancia de la clase
	public function __construct() 
	{
		$this->nombre="Juan";
		$this->apellido="Pérez";
		$this->correo="yo@cesarcancino.com";
		$this->telefono="56545";
	}
}//aquí se termina la clase
$MiClase=new MiClase();
echo $MiClase->nombre;

<?php
class MiClase
{
	private $nombre;
	public $apellido;
	public $correo;
	public $telefono;

	//inicialización
	//se ejecuta cuando se crea la instancia de la clase
	public function __construct($nombre,$apellido,$correo,$telefono) 
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->correo=$correo;
		$this->telefono=$telefono;
	}
}//aquí se termina la clase
$MiClase=new MiClase("César","Cancino","yo@cesarc.com","09809");
echo $MiClase->correo;

<?php
class MiClase
{
	private $nombre;
	private $apellido;
	private $correo;
	private $telefono;

	//inicialización
	//se ejecuta cuando se crea la instancia de la clase
	public function __construct($nombre,$apellido,$correo,$telefono) 
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->correo=$correo;
		$this->telefono=$telefono;
	}
	//no es recomendado imprimir en pantalla desde un método
	public function nombreFuncion()
	{
		return "mi muñeca me habló";
	}
	public function getNombre()
	{
		$nombre="JUan";
		return $this->nombre." ".$nombre;
	}

}//aquí se termina la clase
$MiClase=new MiClase("César","Cancino","yo@cesarc.com","09809");
echo $MiClase->getNombre();


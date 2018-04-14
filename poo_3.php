<?php
class MiClase
{
	private $nombre;
	public $apellido;
	public $correo;
	public $telefono;

	//inicialización
	//se ejecuta cuando se crea la instancia de la clase
	public function __construct($n,$a,$c,$t) 
	{
		$this->nombre=$n;
		$this->apellido=$a;
		$this->correo=$c;
		$this->telefono=$t;
	}
}//aquí se termina la clase
$MiClase=new MiClase("César","Cancino","yo@cesarc.com","09809");
echo $MiClase->correo;

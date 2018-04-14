<?php
//métodos estáticos
class MiClase
{
	private $nombre;

	public function __construct($nombre)
	{
		$this->nombre=$nombre;
	}

	public static function miMetodo()
	{
		return "lo que sea";
	}
}
echo MiClase::miMetodo();
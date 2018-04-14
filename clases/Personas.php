<?php
/**
 *
 * @About     Clase de entidad Personas para ITWALL)
 * @File      Personas.php
 * @Date      Abril-2018
 * @Version   1.0
 * @Developer César Cancino (yo@cesarcancino.com)
 * 
 **/
class Personas
{
	private $id;
	private $nombre;
	private $fecha_nacimiento;
	private $region;
	private $direccion;
	private $rut;
	private $correo;

	public function __construct($id,$nombre,$fecha_nacimiento,$region,$direccion,$rut,$correo)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->fecha_nacimiento=$fecha_nacimiento;
		$this->region=$region;
		$this->direccion=$direccion;
		$this->rut=$rut;
		$this->correo=$correo;
	}

	//getter
	public function getId()
	{
		return $this->id;
	}
	//setter
	public function setId($id)
	{
		$this->id=$id;
	}

}
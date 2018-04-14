<?php
//colaboración de objetos
class Padre
{
	private $var1;
	private $var2;
	private $var3;

	public function getTextoPadre()
	{
		return "maría maría";
	}

}
class Hija
{
	private $Padre;

	public function __construct()
	{
		$this->Padre=new Padre();
	}
	public function retornar()
	{
		return $this->Padre->getTextoPadre();
	}
}
$Hija=new Hija();
echo $Hija->retornar();
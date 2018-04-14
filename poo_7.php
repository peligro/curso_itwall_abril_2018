<?php
abstract class Padre
{
	protected $var1;
	protected $var2;
	protected $var3;

	public function getTextoPadre()
	{
		return "texto desde la clase padre";
	}

}
class Hija extends Padre
{
	public function getTexto()
	{
		return self::getTextoPadre();
	}
}
$Hija=new Hija();
echo $Hija->getTexto();

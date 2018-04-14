<?php

//$datos=array("César Cancino","Silvia Vega","Nicolaza González","Matías Fernández");

//echo $datos[0];

$datos=new ArrayObject(array("César Cancino","Silvia Vega","Nicolaza González","Matías Fernández"));

/*for ($i=0;$i<4;$i++)
{
echo "el usuario $i es ".$datos->offsetGet($i)."<br>";
}*/

//foreach ($datos as $d)

foreach ($datos->getIterator() as $id => $d )
{
	echo $id;
	echo "-";
	echo $d."<br>";
}
echo "<hr>";
echo "la cantidad de usuarios del array datos es ".$datos->count();
$datos->append("Rosa Salazar");
echo "<hr>la cantidad de usuarios del array datos es ".$datos->count();
echo "<hr>";
foreach ($datos->getIterator() as $id => $d )
{
	echo $id;
	echo "-";
	echo $d."<br>";
}
echo "<hr>Los recorreremos usando un ciclo while <hr>";

$iterator =$datos->getIterator();

while ($iterator->valid())
{
	echo $iterator->key();
	echo "-";
	echo $iterator->current();
	echo "<br>";
	echo $iterator->next();
}
echo "<hr>Recorremos el arrayObject desde un ciclo for<hr>";
for($iterator = $datos->getIterator(); $iterator->valid();$iterator->next())
 {

    echo $iterator->key();
	echo "-";
	echo $iterator->current();
	echo "<br>";
}
































?>
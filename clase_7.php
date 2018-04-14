<?php
$matriz[0][0]="Santiago";
$matriz[0][1]="Valparaíso";
$matriz[0][2]="Curicó";

$matriz[1][0]="Lima";
$matriz[1][1]="Cuzco";
$matriz[1][2]="Tacna";

$matriz[2][0]="Caracas";
$matriz[2][1]="Maracaibo";
$matriz[2][2]="Valencia";

for($i=0;$i<sizeof($matriz);$i++)//recorro las filas
{
	for($j=0;$j<sizeof($matriz[$i]);$j++)
	{
		echo "Fila ".$i." = ".$matriz[$i][$j];
		echo "<br />";
	}
}
echo "<hr />";
foreach($matriz as $key=>$filas)
{
	foreach($filas as $key2=>$columnas)
	{
		echo "Estoy parado en la fila ({$key}) y su valor es ".$columnas;
		echo "<br />";
	}
}
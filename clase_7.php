<?php
$matriz[0][0]="Santiago";
$matriz[0][1]="Valparaíso";
$matriz[0][2]="Curicó";

$matriz[1][0]="Lima";
$matriz[1][1]="Cuzco";
$matriz[1][2]="Tacna";

for($i=0;$i<sizeof($matriz);$i++)//recorro las filas
{
	for($j=0;$j<sizeof($matriz[$i]);$j++)
	{
		echo "Fila ".$i." = ".$matriz[$i][$j];
		echo "<br />";
	}
}
echo "<hr />";
foreach($matriz as $key=>$m)
{
	foreach($m as $mm)
	{
		echo "Fila ".$key." = ".$mm;
		echo "<br />";
	}
}
<?php
	/*
	variable = muchos valores 
	//posición o índice
	// largo 5
	arreglo = valor1,valor2,valor3,valor4,valor5
	*/
	$paises =array("Chile","Argentina","México","Perú","Bolivia","Siria","Egipto","España");
	$arreglo = array("Chile","Venezuela", "España", 23, 25.9,true);
	//print_r($arreglo);
	//echo $arreglo[2];
	//echo sizeof($arreglo);
	for($i=0; $i<count($arreglo);$i++)
	{
		echo $arreglo[$i];
		echo "<br />";
	}
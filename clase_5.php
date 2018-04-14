<?php
//ciclos

 //ciclo for
	
 	//se crea una condición
	//se indica la cantidad de veces que se cumple esa condición
	/*
	for( inicia un contador ; una condición ; incremenento o decremento del contador )
	{

	} 
	*/

	// iterar 
	for($i = 1 ; $i <= 10 ; $i++)
	{
		if($i%2==1)
		{
		echo $i;
		echo "<br />";
		}
		
	}
echo "<hr />";
 //while
	/*
 	iniciar el contador
 	while(condición )
 	{

 		incremenento o decremento del contador
 	} 
 	*/
 	$x = 1 ;
 	while($x <= 10)
 	{
 		if($x%2==0)
		{
		echo $x;
		echo "<br />";
		}
		$x++;
 	}
 	

 //foreach ,  este se trabaja con arrays
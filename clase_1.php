<?php

	//toma de decisiones

	//condiciones
		$var1 = 12;
		$var2 = 34;
		$var3 = 24;
		if(   $var1 !=  $var3 or $var2==342 ) //pregunta que en realidad una comparación
		{	
			//echo "si se cumple";	//verdadera
		}else
		{
			//echo "no se cumple"; //falsa
		}
		if($var1==11)
		{
			echo "vale 11";
		}elseif($var1==13)
		{
			echo "vale 13";
		}elseif($var1==14)
		{
			echo "vale 14";
		}else
		{
			echo "no es ninguna";
		}
		switch($var1)
		{
			case 11:
				echo "vale 11";
			break;
			case 14:
				echo "vale 14";
			break;
			case 19:
				echo "vale 19";
			break;
			default:
				echo "no es ninguno";
			break;
		}


	//excepciones
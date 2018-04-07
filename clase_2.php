<?php
if(isset($_POST["nombre"]) )
{
	
	 
	if(filter_var( trim( $_POST["nombre"] )  ) == false)
	{
		echo "el campo nombre viene vacío";
		exit;
	}



	$pais = "";
	$genero ="";
	switch($_POST["pais"])
	{
		case '1':
			$pais="Chile";
		break;
		case '2':
			$pais="Venezuela";
		break;
		case '3':
			$pais="Costarica";
		break;
		case '4':
			$pais="Perú";
		break;
	} 
	if($_POST["genero"]=='m')
	{
		$genero="Masculino";
	}else
	{	
		$genero="Femenino";
	}
	echo "Su país es ".$pais." y su género es ".$genero;
	exit;//aquí se detiene la ejecución del script
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Formulario</title>
</head>
<body>

	<form name="form" action="" method="post">

			<input type="hidden" name="csrf" value="097sa09dasodhsaoi" />

		<p>
			Nombre: <input type="text" name="nombre" />
		</p>
		<p>
			E-Mail: <input type="text" name="correo" />
		</p>
		
		<p>
			País : 
			<select name="pais">
				<option value="0">Seleccione.....</option>	
				<option value="1">Chile</option>
				<option value="2" selected="true">Venezuela</option>
				<option value="3">Costa Rica</option>
				<option value="4">Perú</option>
			</select>
		</p>
		<p>
			Género : 
			Masculino: <input type="radio" name="genero" value="m" checked="true" />
			Femenino: <input type="radio" name="genero" value="f" />
		</p>
		<p>
			<input type="submit" value="Enviar" />
		</p>
	</form>

</body>
</html>
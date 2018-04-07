<?php
if(isset($_POST["nombre"]) )
{
	echo $_POST["nombre"];
	echo "<br />";
	echo $_POST["correo"];
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
			<input type="submit" value="Enviar" />
		</p>
	</form>

</body>
</html>
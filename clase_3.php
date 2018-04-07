
<?php
if(isset($_POST["csrf"]))
{

	$mensaje="";
	if(filter_var( trim( $_POST["nombre"] )  ) == false)
	{
		$mensaje.="El campo Nombre está vacío<br />";
	}
	if(filter_var( trim( $_POST["correo"] )  ) == false)
	{
		$mensaje.="El campo E-Mail está vacío<br />";
	}
	//si mensaje está vacío
	if(empty($mensaje))
	{
		print_r($_POST);
		exit;
	}else
	{
		header("Location: clase_3.php?m=".base64_encode($mensaje));
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Formulario</title>
</head>
<body>
	<?php
	if(isset($_GET["m"]))
	{
		?>	
			<p><?php echo base64_decode($_GET["m"]);?></p>
		<?php
	}
	?>

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
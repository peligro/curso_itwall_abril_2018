
<?php
if(isset($_POST["csrf"]))
{
///print_r($_FILES);exit;
	//echo $_FILES["foto"]["tmp_name"];

	$mensaje="";
	//escaneo

	//valido lo que necesito
		if($_FILES["foto"]["type"]=="image/jpeg" or $_FILES["foto"]["type"]=="image/png")
		{
			
			copy( $_FILES["foto"]["tmp_name"] ,"public/uploads/foto.jpg");
			echo "<img src='public/uploads/foto.jpg' />";
		}else
		{
			die("error");
		}
	//subo el archivo donde yo lo necesite

	//redirecciono y le digo al usuario que se hizo bien

	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Formulario</title>
</head>
<body>
	

	<form name="form" action="" method="post" enctype="multipart/form-data">

			<input type="hidden" name="csrf" value="097sa09dasodhsaoi" />

		<p>
			Suba una foto: <input type="file" name="foto" />
		</p>
		
		<p>
			<input type="submit" value="Enviar" />
		</p>
	</form>

</body>
</html>
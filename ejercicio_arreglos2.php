<?php
$paises =array("Chile","Argentina","México","Perú","Bolivia","Siria","Egipto","España");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />	
	<title>Formulario</title>
</head>
<body>
	<form name="form" method="post" action="">
		<p>
			País: 
			<select name="pais">
				<?php
				foreach($paises as  $key=>$pais)
				{
					?>
					<option value="<?php echo $key?>"><?php echo $pais?></option>
					<?php
				}
				?>
			</select>
		</p>
	</form>
</body>
</html>
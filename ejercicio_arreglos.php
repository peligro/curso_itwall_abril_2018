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
				for($i=0;$i<sizeof($paises);$i++)
				{
					?>
					<option value="<?php echo $i?>"><?php echo $paises[$i];?></option>
					<?php
				}
				?>
			</select>
		</p>
	</form>
</body>
</html>
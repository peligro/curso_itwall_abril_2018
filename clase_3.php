
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
	// hola@hola.com     
	if(filter_var( trim( $_POST["correo"] ),FILTER_VALIDATE_EMAIL  ) == false)
	{
		$mensaje.='El E-Mail ingresado no tiene un formato válido<br />';
	}
	function validar_rut($r = false){
    if((!$r) or (is_array($r)))
        return false; /* Hace falta el rut */
 
    if(!$r = preg_replace('|[^0-9kK]|i', '', $r))
        return false; /* Era código basura */
 
    if(!((strlen($r) == 8) or (strlen($r) == 9)))
        return false; /* La cantidad de carácteres no es válida. */
 
    $v = strtoupper(substr($r, -1));
    if(!$r = substr($r, 0, -1))
        return false;
 
    if(!((int)$r > 0))
        return false; /* No es un valor numérico */
 
    $x = 2; $s = 0;
    for($i = (strlen($r) - 1); $i >= 0; $i--){
        if($x > 7)
            $x = 2;
        $s += ($r[$i] * $x);
        $x++;
    }
    $dv=11-($s % 11);
    if($dv == 10)
        $dv = 'K';
    if($dv == 11)
        $dv = '0';
    if($dv == $v)
        //return number_format($r, 0, '', '.').'-'.$v; /* Formatea el RUT */
        return true;
    return false;
    }
	function validar_pais( $valor )
	{
		if($valor==0)
		{
			return false;
		}else
		{
			return true;
		}
	}
	if(filter_var(trim($_POST["pais"]), FILTER_CALLBACK , array("options"=>"validar_pais")) ==false  )
	{
		$mensaje.='Debe seleccionar una opción en el campo país<br />';
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
				<option value="2">Venezuela</option>
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
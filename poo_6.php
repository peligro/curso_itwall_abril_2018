<?php
require_once("clases/Personas.php");
//$id,$nombre,$fecha_nacimiento,$region,$direccion,$rut,$correo
$Personas=new Personas(1,"César Cancino","24/05/1980","Metropolitana","Mi casa","11111","yo@jajaja.com");
echo $Personas->getId();
$Personas->setId(23);
echo "<br />";
echo $Personas->getId();
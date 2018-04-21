<?php 
require_once('clases/Productos.php');
$p=new Productos();
$datos=$p->getProductos();
print_r($datos);exit;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />    
    <title>Listado de productos</title>
</head>
<body>


</body>
</html>
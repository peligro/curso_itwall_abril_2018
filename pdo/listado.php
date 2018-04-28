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

    <h1>Listado de productos</h1>
    <ul>
    <?php
    foreach ($datos as $key=>$dato) 
    {
    
        ?>
        <li><?php echo $dato->id?> | <?php echo $dato->nombre?></li>
        <?php    
    }
    ?>
    </ul>
</body>
</html>
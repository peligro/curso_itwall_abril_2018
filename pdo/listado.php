<?php 
require_once('clases/Productos.php');
$p=new Productos();

////pasos para insertar (CUD)

//recibo el formulario o el parámetro respectivo, que puede vía GET, POST, PUT, DELETE, REQUEST
//validar con filter_var
//aplico el método PDO para procesar. Se recomienda colocar la consulta SQL en una variable;
//"insert into productos values(null,'".$_POST["tipo"]."','Piñas coladas',1200,now(),1);"
//echo $sql;exit;
//decirle al usuario qué pasó. Para eso es bueno redireccionar a alguna parte.
//insert into productos values(null,tipo,nombre,precio,fecha,estado);
//insert into personas values (null,),
//$sql="insert into productos values(null,6,'Piñas coladas',1200,now(),1);";
//$guardar=$p->procesar($sql);
//echo $guardar;
$datos=$p->getProductos();
//print_r($datos);
//semántica: corresponde a las buenas prácticas desde el punto de vista técnico, y del ámbito del Marketing Digital, enfocado básicamente en SEO (Search Engine Optimization)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Listado de productos</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/estilos.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <!--panel-->
            <div class="panel panel-primary ">
                 <div class="panel-heading clase">Título del panel</div>
                 <div class="panel-body">
                     <h1>Listado de Productos</h1>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>Nombre</th>
                                 <th>Precio</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
                             foreach($datos as $dato)
                             {
                                ?>
                                <tr>
                                    <td><?php echo $dato['id']?></td>
                                    <td><?php echo $dato['nombre']?></td>
                                    <td>$<?php echo number_format($dato['precio'],0,'','.');?></td>
                                </tr>
                                <?php
                             }
                             ?>
                         </tbody>
                     </table>
                 </div>  
            </div>
            <!--/panel-->
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>


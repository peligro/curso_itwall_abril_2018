<?php
require_once('conectar.php');
class Productos extends Conectar
{
    private $bd; 

    public function __construct()
    {
        $this->bd=parent::conectar();
        parent::setNames();
    }
    public function getProductos()
    {
        $sql="select * from productos;";
        $datos =$this->bd->query($sql);
        $arreglo=array();
        while($reg=$datos->fetch_object())
           {
                $arreglo[]=$reg;
           }  
        return $arreglo; 
        
    }
    public function getProductosActivos()
    {
        $sql="select * from productos where estado=1;";
        $datos =$this->bd->query($sql);
        $arreglo=array();
        while($reg=$datos->fetch_object())
           {
                $arreglo[]=$reg;
           }  
        return $arreglo; 
        
    }
}
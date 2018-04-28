<?php
require_once('Conectar.php');
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
        //$datos=$this->con->prepare($sql);
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $datos->fetchAll();
        //return $datos->fetchObject();
        $this->bd=null;

    }
    public function procesar($sql)
    {
        
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $this->bd->lastInsertId();
    }
   
}
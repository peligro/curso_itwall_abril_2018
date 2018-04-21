<?php 
abstract class Conectar
{
    private $mysqli;

    public function conectar()
    {
        //$this->mysqli=new mysqli("servidor", "usuario de la bd", "password de la bd", "nombre de bd");
        $this->mysqli=new mysqli("localhost", "root", "", "itwall");
        return $this->mysqli;
    }
    public function setNames()
    {
        return $this->mysqli->query("SET NAMES 'utf8'");
    }
}
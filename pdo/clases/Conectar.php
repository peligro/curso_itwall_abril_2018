<?php
abstract class Conectar
{
	private $pdo;
	

	//public function conectar($dsn,$user,$password)
	public function conectar()
    {
    	//$this->pdo = new PDO('dsn','user','pass');
    	//Domain Server Name
    	//motor_de_bd:dbname=nombre_de_la_bd;host=localhost
    	
    	try
    	{	
    		//agregamos el código a testear
    		/*
			mssql:host=localhost;dbname=testdb
			sybase:host=localhost;dbname=testdb
			dblib:host=localhost;dbname=testdb
			mysql:dbname=itwall;host=localhost
    		*/
    		$this->pdo = new PDO('mysql:dbname=itwall;host=localhost','root','');
    		//$this->pdo = new PDO($dns,$user,$password);
    		return $this->pdo;
    	}catch(PDOException $e)
    	{
    		echo $e->getMessage();
    		echo '<br />';
    		echo $e->getCode();
    		exit;
    	}
    }
    public function setNames()
    {
		return $this->pdo->query("SET NAMES 'utf8'");
    }
}
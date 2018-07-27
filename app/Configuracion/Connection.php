<?php 
namespace Configuracion;
class Connection 
{

	public static $connection;
	function __construct(){


	}

	static public function getConnection(){
       return new \PDO("mysql:dbname=licoreria;host=localhost", "root", "");

    }




}
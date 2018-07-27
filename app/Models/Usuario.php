<?php 

namespace Models;
use Configuracion\Connection;
class Usuario 
{

    
    //solo maneja datos
	function __construct()
	{
    

	}


	public function getUsuario($user,$pass){
	    $conn=Connection::getConnection();
        $resultl=$conn->prepare("select COUNT(*) as cantidad FROM usuario where usuario.id_usuario=:id AND usuario.pass_usuario=:pass");
          $resultl->bindParam(":id",$user);
          $resultl->bindParam(":pass",$pass);
          $resultl->execute();
          $result=$resultl->fetchObject();
          return $result;

    }
}

 
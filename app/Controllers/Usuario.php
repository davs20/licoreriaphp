<?php 
/**
 * 
 */

namespace Controllers;
use Models\Usuario as ModelUsuario;
class Usuario
{
    protected $ModelUsuario=null;
	
	function __construct()
	{
		$this->ModelUsuario=new ModelUsuario();
		
	}

	public function authLogin($user,$pass){
		$con=new ModelUsuario();
	    $consulta=$con->getUsuario($user,$pass);
	    session_start();
        $hora = date('H:i');
        $session_id = session_id();
        $token = hash('sha256', $hora.$session_id);
        $_SESSION['token'] = $token;
        echo $consulta->cantidad;
	    
    }


}
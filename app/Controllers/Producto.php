<?php

namespace Controllers;
use Models\Producto as ModelsProductos;
use Configuracion\Connection;
class Producto implements accionControllers{
	static private $con=null;
	
	function __construct(){
    

	}

	public function showAll(){
		$datos=ModelsProductos::getProductos();
		echo json_encode($datos);


	}

    
   public function show($id){
	$producto=ModelsProductos::getProducto($id);
	echo json_encode($producto);

 }

 public function disable($id){
    ModelsProductos::disableProducto();
 }

 public function edit($json){
 	ModelsProductos::edit($json);

 }

	
}

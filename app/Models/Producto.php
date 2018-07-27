<?php


namespace Models;


use Configuracion\Connection;

class Producto{

	public function getProductos(){
		$consulta=Connection::getConnection();
		$result=$consulta->prepare("select * from producto inner join categoria on categoria.id_categoria=producto.categoria_id");
		$result->execute();
		while ($data = $result->fetch(\PDO::FETCH_ASSOC)){
			$array["data"][]=$data;
		}
		return $array;
	}

	public function getProducto($id){
	    $consulta=Connection::getConnection();
		$result=$consulta->prepare("select * from producto where id_producto=:id_producto");
		$result->bindParam(':id_producto',$id);
		$result->execute();	
		return $result->fetchObject();

	}

	public function edit($data){
		$consulta=Connection::getConnection();
		$result=$consulta->prepare("Update producto set nombre=:nombre,descripcion=:descripcion,categoria_id=:id_categoria");
	    $result=bindParam();
	    $result->execute();

	}


}
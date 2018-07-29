<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 27/07/2018
 * Time: 8:37
 */

namespace Controllers;
use Models\Marca as ModelsMarca;

class Marca{

    public function showAll(){
        $datos=ModelsMarca::getMarcas();
        echo json_encode($datos);
    }

}
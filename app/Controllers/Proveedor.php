<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 27/07/2018
 * Time: 9:11
 */

namespace Controllers;
use Models\Proveedor as ModelsProveedor;


class Proveedor implements accionControllers {


    public function showAll()
    {
        $datos=ModelsProveedor::getProveedores();
        echo json_encode($datos);
        // TODO: Implement showAll() method.
    }

    public function edit($data)
    {
        // TODO: Implement edit() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function disable($id)
    {
        // TODO: Implement disable() method.
    }
}
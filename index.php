<?php
require_once "vendor/autoload.php";


use Configuracion\Routing\Router;


$router = new Router($_SERVER['REQUEST_URI']);
Router::$dir_root = "/licoreria";
$router->add('/inicio', function () {
	$_POST["vista"]="inicio";
    include 'app/html/main.php';
},null);

$router->add('/Productos',"Controllers\Producto::showAll",null);
$router->add('/Marcas',"Controllers\Marca::showAll",null);
$router->add('/Categorias',"Controllers\Categoria::showAll",null);
$router->add('/Producto/:producto',"Controllers\Producto::show",null);
$router->add('/Producto/:producto',"Controllers\Producto::disable",null);


$router->add('/', function (){
    include 'app/html/login.php';
},null);


if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
$router->add("/login",'Controllers\Usuario::authLogin',array("user"=>$_POST["usuario"],"pass"=>$_POST["pass"]));	
}






$router->run();



<?php

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'materia_inteligencia',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent(); 

$ruta = (isset($_GET['r'])) ? $_GET['r'] : null;

if ($ruta == '/usuarios')
{
	$route = [
		'controller' => 'App\Controllers\UsuarioController',
		'action' => 'index'
	];
}
else if ($ruta == '/usuarios/add')
{
	$route = [
		'controller' => 'App\Controllers\UsuarioController',
		'action' => 'add'
	];
}

$controllerName = $route['controller'];
$actionName = $route['action'];

$controller = new $controllerName();
$controller->$actionName();

?>
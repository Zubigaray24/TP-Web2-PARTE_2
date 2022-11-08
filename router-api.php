<?php
require_once './libs/Router.php';
require_once './api/games.api.controller.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('juegos', 'GET', 'JuegoApiController', 'obtenerJuegos');
$router->addRoute('juegos', 'POST', 'JuegoApiController', 'crearJuego');
$router->addRoute('juegos/:ID', 'GET', 'JuegoApiController', 'obtenerJuego');
$router->addRoute("/juegos/:ID", "DELETE", "JuegoApiController", "eliminarJuego");
$router->addRoute("/juegos/:ID", "PUT", "JuegoApiController", "editarJuego");


// rutea
$router->route($resource, $method);

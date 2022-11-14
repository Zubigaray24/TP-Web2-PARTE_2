<?php
require_once './libs/Router.php';
require_once './api/games.api.controller.php';
require_once './api/genre.api.controller.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// crea el router
$router = new Router();

// define la tabla de ruteo

//JUEGOS
$router->addRoute('/juegos', 'GET', 'JuegoApiController', 'getJuegos');
$router->addRoute('/juegos/:ID', 'GET', 'JuegoApiController', 'getJuego');
$router->addRoute('/juegos', 'POST', 'JuegoApiController', 'addJuego');
$router->addRoute("/juegos/:ID", 'DELETE', "JuegoApiController", "deleteJuego");
$router->addRoute("/juegos/:ID", 'PUT', "JuegoApiController", "updateJuego");//
//GENEROS
$router->addRoute("/generos", 'GET', "GeneroApiController", "getGeneros");
$router->addRoute("/generos/:ID", 'GET', "GeneroApiController", "getGenero");
$router->addRoute("/generos", 'POST', "GeneroApiController", "addGenero");
$router->addRoute("/generos/:ID", 'DELETE', "GeneroApiController", "deleteGenero");

// rutea
$router->route($resource, $method);

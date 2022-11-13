<?php
require_once './libs/Router.php';
require_once './api/games.api.controller.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

$orderBy = $_GET["orderBy"] ?? null;

$orderMode = $_GET["orderMode"] ?? null;

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('/juegos', 'GET', 'JuegoApiController', 'getJuegos');
$router->addRoute('/juegos/:ID', 'GET', 'JuegoApiController', 'getJuego');
$router->addRoute('/juegos', 'POST', 'JuegoApiController', 'addJuego');
$router->addRoute("/juegos/:ID", 'DELETE', "JuegoApiController", "deleteJuego");
$router->addRoute("/juegos/:ID", 'PUT', "JuegoApiController", "updateJuego");
//Estos 3 estan mal hechos
$router->addRoute("/juegos/byprice", 'GET', "JuegoApiController", "getJuegosPorPrecio");
$router->addRoute("/juegos/byorderAsc", 'GET', "JuegoApiController", "getJuegosPorOrdenAscendenteAlfabeticamente");
$router->addRoute("/juegos/byorderDesc", 'GET', "JuegoApiController", "getJuegosPorOrdenDescendenteAlfabeticamente");


// rutea
$router->route($resource, $method);

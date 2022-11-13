<?php
    require_once './3-Controller/games.controller.php';
    require_once('./3-Controller/login.controller.php');
    require_once ('./3-Controller/genre.controller.php');

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    // parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
    $params = explode('/', $action);

    $genreController = new genreController();
    $gamesController = new gamesController();
    $loginController = new logincontroller();

    // determina que camino seguir según la acción
    switch ($params[0]) {

        case 'home':
            $gamesController->showHome();
            break;
        case 'todoslosjuegos':
            $gamesController->showGame();
            break;
        case 'juego':
            $gamesController->showGameInfo($params[1]);
            break;
        case 'todoslosgeneros':  
            $genreController->showCategoria();
            break;
        case 'genero':
            $gamesController->showJuegosPorGenero($params[1]);
            break;
        case 'login':
            $loginController->showLogin();
            break;
        case 'showregister':
            $loginController->showRegister();
            break;
        case 'register':
            $loginController->createUser();
            $loginController->verifyUser();
            break;
        case 'verify':
            $loginController->verifyUser();
            break;
        case 'logout':
            $loginController->logout();
            break;
        // ABM DE JUEGOS
        case'mostrarformulario':
            $gamesController->showFormulario();
            break;
        case 'agregarJuego':
            $gamesController->addJuego();
            break;
        case 'borrarJuego':
            $gamesController->deleteJuego($params[1]);
            break;
        case 'mostrarFormularioEditarJuego':
            $gamesController->showFormularioEdit($params[1]);
            break;
        case 'editarJuego':
            $gamesController->editJuego();
            break;
        //ABM DE CATEGORIAS/GENEROS
        case 'mostrarFormularioGenero':
            $genreController->showFormularioGenero();
            break;
        case 'agregarGenero':
            $genreController->addGenero();
            break;
        case 'showFormularioEditarGenero':
            $genreController->showFormularioEditGenero($params[1]);
            break;
        case 'editarGenero':
            $genreController->editGenero();
            break;
        case 'borrarGenero':
            $genreController->deleteGenero($params[1]);
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }
?>
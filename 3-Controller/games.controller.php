<?php
//controlador es el que se encarga de las operaciones y del modelo y la vista

require_once './1-Model/games.model.php';
require_once './1-Model/genre.model.php';
require_once './2-View/games.view.php';
require_once './Helper/AuthHelper.php';

class gamesController{
    private $genreModel;
    private $gamesModel;
    private $gamesView;
    private $helper;

    function __construct()
    {
        $this->genreModel = new genreModel();
        $this->gamesModel = new gamesModel();
        $this->gamesView = new gamesView();
        $this->helper = new AuthHelper();
    }

    function showHome(){
        $check = $this->helper->logged();
        $this->gamesView->showHome($check);
    }

    function showGame(){
        $check = $this->helper->logged();
        $lista = $this->gamesModel->getNombre();
        //$id = $this->gamesModel->getIdJuego();
        $this->gamesView->showJuego($lista, $check);
    }

    function showGameInfo($id){
        $juego = $this->gamesModel->getJuego($id);
        $genero = $this->genreModel->getCategoria($juego->id_genero);//
        $this->gamesView->showJuegoInfo($juego, $genero->nombregenero);

    }

    function showJuegosPorGenero($id_genero){
        $lista = $this->gamesModel->getJuegosPorGenero($id_genero);
        $this->gamesView->showJuegosPorGenero($lista);
    }
// ABM DE JUEGOS
    function addJuego(){
        $nombre = $_POST['nombre']; 
        $f_d_l = $_POST['fechalanzamiento']; 
        $desarrollador = $_POST['desarrollador'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $id_genero = $_POST['idgenero'];
        $check = $this->helper->logged();    

        if($check == "Logeado"){
            if(isset($nombre) && isset($f_d_l) && isset($desarrollador) && isset($precio) && isset($descripcion) && isset($id_genero) ){
                $this->gamesModel->addJuego($nombre, $f_d_l, $desarrollador, $precio, $descripcion, $id_genero);
                $this->gamesView->showTodosLosJuegos();
            }
        }

    }

    function showFormulario(){
        $check = $this->helper->logged();

        if ($check == "Logeado"){
            $generos=$this->genreModel->getCategorias();
            $this->gamesView->showFormulario($generos);
        }
    }

    function deleteJuego($id){
        $check = $this->helper->logged();

        $categorias = $this->genreModel->getCategorias();
        $juego = $this->gamesModel->getJuego($id);
        $resultado = false;

        foreach ($categorias as $categoria){
            if ($juego->id_genero == $categoria){
                $resultado = true;
            }
        }

        if ($resultado == false){
            if ($check == "Logeado" && isset($id)){
                $this->gamesModel->deleteJuego($id);
                $this->gamesView->showTodosLosJuegos();
            }
        }
        else{
            $this->gamesView->showTodosLosJuegos(); 
        }
    }

    function editJuego(){

        $id_juego = $_POST['idjuego'];
        $nombre = $_POST['editnombre']; 
        $f_d_l = $_POST['editfechalanzamiento']; 
        $desarrollador = $_POST['editdesarrollador'];
        $precio = $_POST['editprecio'];
        $descripcion = $_POST['editdescripcion'];
        $genero = $_POST['editidgenero'];
        $check = $this->helper->logged();

        if ($check == "Logeado" && (isset($id_juego)&& isset($nombre)&& isset($f_d_l)&& isset($desarrollador)&& isset($precio)&& isset($descripcion)&& isset($genero))) {
            $this->gamesModel->editJuego($id_juego, $nombre, $f_d_l, $desarrollador, $precio, $descripcion, $genero);
            $this->gamesView->showTodosLosJuegos();    
        } else {
            $this->gamesView->showTodosLosJuegos();        
        }
    }

    function showFormularioEdit($id){

        $check = $this->helper->logged();

        if ($check == "Logeado"){

            if ($id != null){
                if (isset($id)) {
                    $generos = $this->genreModel->getCategorias();
                    $datos = $this->gamesModel->getJuego($id);
                    $this->gamesView->showFormularioEditar($generos, $datos);
                } else {
                    $this->gamesView->showTodosLosJuegos();
                }
            }
        }
    }
    
}

?>
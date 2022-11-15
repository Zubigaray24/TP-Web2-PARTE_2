<?php
//controlador es el que se encarga de las operaciones y del modelo y la vista

require_once './1-Model/games.model.php';
require_once './1-Model/genre.model.php';
require_once './2-View/games.view.php';
require_once './Helper/AuthHelper.php';

class genreController{
    private $gamesModel;
    private $genreModel;
    private $gamesView;
    private $helper;

    function __construct()
    {
        $this->gamesModel = new gamesModel();
        $this->genreModel = new genreModel();
        $this->gamesView = new gamesView();
        $this->helper = new AuthHelper();
    }

    function showCategoria(){
        $check = $this->helper->logged();
        $listCategorias = $this->genreModel->getCategorias();
        $this->gamesView->showCategoria($listCategorias, $check);
    }

    //ABM DE CATEGORIAS/GENEROS
    function showFormularioGenero(){
        $check = $this->helper->logged();

        if ($check == "Logeado"){
            $generos=$this->genreModel->getCategorias();
            $this->gamesView->showFormularioGenero($generos);
        }
        else{
            $this->gamesView->showHomeLocation();
        }
    }

    function addGenero(){
        $check = $this->helper->logged();

        if ($check == "Logeado"){ 
            $genero = $_POST['newgenero'];
            $this->genreModel->addGenero($genero);
            $this->gamesView->showTodosLosGeneros();  
        }
        else{
            $this->gamesView->showHomeLocation();
        }
    }

    function deleteGenero($id){

        $check = $this->helper->logged();

        $juegos = $this->gamesModel->getNombre();
        $resultado = false;

        foreach ($juegos as $juego){
            if ($id == $juego->id_genero){
                $resultado = true;
            }
            else {
                $this->gamesView->showTodosLosGeneros();
            }
        }

        if ($resultado == false){
            if (($check == "Logeado")){
                $this->genreModel->deleteGenero($id);
                $this->gamesView->showTodosLosGeneros();
            }
        }
        else{
            $this->gamesView->showHomeLocation();
        }
    }

    function showFormularioEditGenero($id){
        $check = $this->helper->logged();

        if ($check == "Logeado"){
            if ($id != null){
                if (isset($id)) {
                    $nombre = $this->genreModel->getCategoria($id);
                    $this->gamesView->showFormularioGeneroEditar($id, $nombre);
                } else {
                    $this->gamesView->showTodosLosGeneros();
                }
            }
        }
    }

    function editGenero(){
        $id = $_POST['idgenero'];
        $nombre = $_POST['editnombregenero'];
        $check = $this->helper->logged();

        if(($check == 'Logeado')&&(isset($nombre))){
            $this->genreModel->editGenero($nombre,$id);
            $this->gamesView->showTodosLosGeneros();  
        }
        else{
            $this->gamesView->showHomeLocation(); 
        }
    }
}

?>
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
    }

    function addGenero(){
        $check = $this->helper->logged();

        if ($check == "Logeado"){ 
            $genero = $_POST['newgenero'];
            $this->genreModel->addGenero($genero);
            $this->gamesView->showTodosLosGeneros();  
        }   
    }

    function deleteGenero($id){
        $check = $this->helper->logged();

        //tengo que hacer un helper que si un juego tenga el genero salga un alert diciendo que no se puede eliminar porque hay un juego con ese genero

        if (($check == "Logeado")){
            $this->genreModel->deleteGenero($id);
            $this->gamesView->showTodosLosGeneros();
        }
    }

    function showFormularioEditGenero($id){
        $check = $this->helper->logged();

        if ($check == "Logeado"){
            if ($id != null){
                if (isset($id)) {
                    $this->gamesView->showFormularioGeneroEditar($id);
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

        var_dump($id);
        var_dump($nombre);
        if(($check == 'Logeado')&&(isset($id))&&(isset($nombre))){
            $this->genreModel->editGenero($nombre,$id);
            $this->gamesView->showTodosLosGeneros();  
        }
        else{
            $this->gamesView->showHomeLocation(); 
        }
    }

}

?>
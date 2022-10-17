<?php
//controlador es el que se encarga de las operaciones y del modelo y la vista

require_once './1-Model/games.model.php';
require_once './2-View/games.view.php';
require_once './Helper/AuthHelper.php';

class gamesController{
    private $gamesModel;
    private $gamesView;
    private $helper;

    function __construct()
    {

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
        $this->gamesView->showJuego($lista, $check);
    }

    function showCategoria(){
        $check = $this->helper->logged();
        $listCategorias = $this->gamesModel->getCategorias();
        $this->gamesView->showCategoria($listCategorias, $check);
    }

    function showGameInfo($id){
        $juego = $this->gamesModel->getJuego($id);
        $genero = $this->gamesModel->getCategoria($juego->id_genero);//
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
            
        if( isset($nombre) && isset($f_d_l) && isset($desarrollador) && isset($precio) && isset($descripcion) && isset($id_genero) ){
            $this->gamesModel->addJuego($nombre, $f_d_l, $desarrollador, $precio, $descripcion, $id_genero);
            $this->gamesView->showTodosLosJuegos();
        }
    }

    function showFormulario(){
        $generos=$this->gamesModel->getCategorias();
        $this->gamesView->showFormulario($generos);
    }

    function deleteJuego($id){
        $this->gamesModel->deleteJuego($id);
        $this->gamesView->showTodosLosJuegos();
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
            $this->gamesView->showHomeLocation();        
        }
    }

    function showFormularioEdit($id){

        if ($id != null){
            if (isset($id)) {
                $generos = $this->gamesModel->getCategorias();
                $this->gamesView->showFormularioEditar($generos, $id);
            } else {
                $this->gamesView->showTodosLosJuegos();
            }
        }
    }
    //ABM DE CATEGORIAS/GENEROS
    function showFormularioGenero(){
        $generos=$this->gamesModel->getCategorias();
        $this->gamesView->showFormularioGenero($generos);
    }

    function addGenero(){
            $genero = $_POST['newgenero'];
            $this->gamesModel->addGenero($genero);
            $this->gamesView->showTodosLosGeneros();        
    }

    function deleteGenero($id){
        $this->gamesModel->deleteGenero($id);
        $this->gamesView->showTodosLosGeneros();
    }

    function showFormularioEditGenero($id){
        if ($id != null){
            if (isset($id)) {
                $this->gamesView->showFormularioGeneroEditar($id);
            } else {
                $this->gamesView->showTodosLosGeneros();
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
            $this->gamesModel->editGenero($nombre,$id);
            $this->gamesView->showTodosLosGeneros();  
        }
        else{
            $this->gamesView->showHomeLocation(); 
        }
    }

}

?>
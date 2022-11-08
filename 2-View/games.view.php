<?php
//vista solo muestra datos que recibe

require_once './smarty-4.2.1/libs/Smarty.class.php';

class gamesView{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }

    function showTodosLosJuegos(){
        header('Location:' . BASE_URL . 'todoslosjuegos');
    }

    function showTodosLosGeneros(){
        header('Location:' . BASE_URL . 'todoslosgeneros');
    }

    function showHome($check){
        $this->smarty->assign('check', $check);
        $this->smarty->display('templates/home.tpl');
    }

    function showJuego($lista, $check){
        $this->smarty->assign('lista', $lista);
        $this->smarty->assign('check', $check);
        $this->smarty->display('templates/listajuegos.tpl');
    }

    function showCategoria($listaCategorias, $check){
        $this->smarty->assign('listaCategorias', $listaCategorias);
        $this->smarty->assign('check', $check);
        $this->smarty->display('templates/categorias.tpl');
    }

    function showJuegoInfo($id, $genero){
        $this->smarty->assign('juego', $id);
        $this->smarty->assign('genero', $genero);
        $this->smarty->display('templates/juegoinfo.tpl');
    }

    function showJuegosPorGenero($lista){
        $this->smarty->assign('lista', $lista);
        $this->smarty->display('templates/juegosporgenero.tpl');
    }
// ABM DE JUEGOS
    function showFormulario($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/agregarJuego.tpl');
    }

    function showFormularioEditar($generos, $id,){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/editarJuego.tpl');
    }

//ABM DE CATEGORIAS/GENEROS

    function showFormularioGenero($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/agregarGenero.tpl');
    }

    function showFormularioGeneroEditar($id){
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/editarGenero.tpl');
    }
}
?>
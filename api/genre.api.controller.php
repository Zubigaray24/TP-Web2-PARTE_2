<?php

require_once './1-Model/genre.model.php';
require_once './1-Model/games.model.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';

class GeneroApiController extends ApiController{

  public function __construct(){
    parent::__construct();
    
  }

  public function getGeneros($params = null) {
    if (isset($_GET['order']) && isset($_GET['sort']))
    {
      if(($_GET['sort'] == "nombre") || ($_GET['SORT'] == "NOMBRE"))
      {
        if(($_GET['order'] == "ASC") || ($_GET['order'] == "asc"))
        {
          $generos = $this->modelgenre->getGenerosPorOrdenAscendenteAlfabeticamente();
          $this->view->response($generos, 200);
        }
        elseif(($_GET['order'] == "DESC") || ($_GET['order'] == "desc"))
        {
          $generos = $this->modelgenre->getGenerosPorOrdenDescendenteAlfabeticamente();
          $this->view->response($generos, 200);
        }
      }
    }
    else
    {
      $generos = $this->modelgenre->getCategorias();
      $this->view->response($generos, 200); //
    }
  }

//obtiene un juego solo
    public function getGenero($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $genero = $this->modelgenre->getCategoria($id);
        
        if ($genero) 
        {
            $this->view->response($genero, 200);   //
        } 
        else
        {
            $this->view->response("No existe el genero con el id={$id}", 404);
        }
        
      }

      //elimina un juego
  public function deleteGenero($params = null) {
    $genero_id = $params[':ID'];

    $genero = $this->modelgenre->getCategoria($genero_id);

    $juegos = $this->model->getNombre();

    $resultado = false;

    foreach ($juegos as $juego){
        if ($genero_id == $juego->id_genero){
            $resultado = true;
        }
    }

    if ($resultado == false)
    {
        if ($genero)
        {
            $this->modelgenre->deleteGenero($genero_id);
            $this->view->response("El genero fue borrado con exito.", 200);       //
        } 
        else
        {
            $this->view->response("El genero con el id={$genero_id} no existe", 404); //
        }
    }
    else
    {
        $this->view->response("Este genero esta ligado a un juego, elimine el juego primero para proceder", 500);
    }

  }

    //agrega un juego
    public function addGenero($params = null) {
        $data = $this->getData();
    
        $id = $this->modelgenre->addGenero($data->nombregenero);
    
        $genero = $this->modelgenre->getCategoria($id);
    
        if ($genero)
          $this->view->response($genero, 201);
        else
          $this->view->response("El genero no fue creado", 500);
      }
}
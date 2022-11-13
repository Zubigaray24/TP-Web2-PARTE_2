<?php

require_once './1-Model/games.model.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';

class JuegoApiController extends ApiController{

  public function __construct(){
    parent::__construct();
    $this->model = new gamesModel();
  }

  /*private function getData() {
    return json_decode($this->data);
  }*/

  //recibe todos los juegos
  public function getJuegos($params = null) {
    if (isset($_GET['order']) && isset($_GET['sort']))
    {
      if(($_GET['sort'] == "nombre") || ($_GET['SORT'] == "NOMBRE"))
      {
        if(($_GET['order'] == "ASC") || ($_GET['order'] == "asc"))
        {
          $juegos = $this->model->getJuegosPorOrdenAscendenteAlfabeticamente();
          $this->view->response($juegos, 200);
        }
        elseif(($_GET['order'] == "DESC") || ($_GET['order'] == "desc"))
        {
          $juegos = $this->model->getJuegosPorOrdenDescendenteAlfabeticamente();
          $this->view->response($juegos, 200);
        }
      }
    }
    else
    {
      $juegos = $this->model->getNombre();
      $this->view->response($juegos, 200); //
    }


  }

  //obtiene un juego solo
  public function getJuego($params = null) {
    // obtiene el parametro de la ruta
    $id = $params[':ID'];
    
    $juego = $this->model->getJuego($id);
    
    if ($juego) {
      $this->view->response($juego, 200);   //
    } 
    else
    {
      $this->view->response("No existe el juego con el id={$id}", 404);
    }
  }

  //elimina un juego
  public function deleteJuego($params = null) {
    $juego_id = $params[':ID'];

    $juego = $this->model->getJuego($juego_id);

    if ($juego){
      $this->model->deleteJuego($juego_id);
      $this->view->response("El juego fue borrado con exito.", 200);       //
    } 
    else
    {
      $this->view->response("El juego con el id={$juego_id} no existe", 404); //
    }
  }

  //preguntarle a gonza que onda
  //actualiza el estado de un juego
  public function updateJuego($params = null) {
    $juego_id = $params[':ID'];  
    $juego = $this->model->getJuego($juego_id);

    if ($juego){
      $data = $this->getData();

      $nombre = $data->nombre;
      $fechalanzamiento = $data->fechalanzamiento;
      $desarrollador = $data->desarrollador;
      $precio = $data->precio;
      $descripcion = $data->descripcion;
      $idGenero = $data->id_genero;

      //no se se el id del genero va asi
      $game = $this->model->editJuego($juego_id, $nombre, $fechalanzamiento, $desarrollador, $precio, $descripcion, $idGenero);
      $this->view->response("El juego con la id={$juego_id} fue modificado con exito.", 200);
    } 
    else
    {
      $this->view->response("El juego con el id={$juego_id} no existe", 404);
    }
  }

  //agrega un juego
  public function addJuego($params = null) {
    $data = $this->getData();

    $id = $this->model->addJuego($data->nombre, $data->fechalanzamiento, $data->desarrollador, $data->precio, $data->descripcion, $data->id_genero);

    $juego = $this->model->getJuego($id);

    if ($juego)
      $this->view->response($juego, 201);
    else
      $this->view->response("El juego no fue creado", 500);
  }

}
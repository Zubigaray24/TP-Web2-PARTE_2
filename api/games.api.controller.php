<?php

require_once './1-Model/games.model.php';
require_once './api/APIView.php';

class JuegoApiController {
  private $model;
  private $view;
  private $data;

  public function __construct() {
    $this->model = new gamesModel();
	  $this->view = new APIView();
    $this->data = file_get_contents("php://input");

  }

  private function getData() {
    return json_decode($this->data);
  }

  
  function getJuegos($params = null) { //ver si va el [] o null
    $juegos = $this->model->getNombre();
    $this->view->response($juegos, 200);
  }

  public function getJuego($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $juego = $this->model->getJuego($id);
        
        if ($juego) {
            $this->view->response($juego, 200);   
        } else {
            $this->view->response("No existe el juego con el id={$id}", 404);
        }
    }

  public function deleteJuego($params = null) {
    $id = $params[':ID'];
    $juego = $this->model->getJuego($id);
    if ($juego) {
      $this->model->deleteJuego($id);
      $this->view->response("El juego fue borrado con exito.", 200);       
    } 
    else{
      $this->view->response("El juego con el id={$id} no existe", 404);
    }
  }
//preguntarle a gonza que onda
  public function updateJuego($params = null) {
    $id = $params[':ID'];
    $data = $this->getData();
        
    $juego = $this->model->getJuego($id);
    if ($juego) {
      $this->model->editJuego($id, $data->nombre, $data->fechalanzamiento, $data->desarrollador, $data->precio, $data->descripcion, $data->id_genero); //no se se el id del genero va asi
      $this->view->response("El juego fue modificado con exito.", 200);
    } 
    else {
      $this->view->response("El juego con el id={$id} no existe", 404);
    }
  }

  public function addJuego($params = null) {
    $data = $this->getData();

    $id = $this->model->addJuego($data->nombre, $data->fechalanzamiento, $data->desarrollador, $data->precio, $data->descripcion, $data->id_genero);
        
    $juego = $this->model->getJuego($id);
    
    if ($juego)
      $this->view->response($juego, 200);
    else
      $this->view->response("El juego no fue creado", 500);

    }


}
<?php

abstract class ApiController {
    protected $model;
    protected $view;
    protected $modelgenre;
    private $data; 

    public function __construct() {
        $this->view = new APIView();
        $this->data = file_get_contents("php://input"); 
        $this->model = new gamesModel();
        $this->modelgenre = new genreModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

?>

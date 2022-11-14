<?php
include_once './2-View/login.view.php';
include_once './2-View/games.view.php';
include_once './1-Model/login.model.php';
include_once './Helper/AuthHelper.php';

class logincontroller{
    private $view;
    private $model;
    private $gamesView;

    public function __construct()
    {
        $this->view = new loginview();
        $this->model = new loginmodel();
        $this->gamesView = new gamesView();
    }
    
    public function showLogin() {
        $this->view->showLogin();
    }

    public function showRegister(){
        $this->view->showRegister();
    }

    function createUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $passwordhash = password_hash($password, PASSWORD_BCRYPT);

        $this->model->createUser($username, $passwordhash);
    }
    
    public function verifyUser() {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getUser($username);

        // encontró un user con el username que mandó, y tiene la misma contraseña

        if ($user && password_verify($password, $user->contraseña)) {
            
            // INICIO LA SESSION Y LOGUEO AL USUARIO

            session_start();

            $_SESSION['ID_USER'] = $user->id;

            $_SESSION['EMAIL'] = $user->email;

            header('Location: home');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        $this->view->ShowLogin("Cerraste sesión");
        $this->gamesView->showHomeLocation();
    }
}
?>
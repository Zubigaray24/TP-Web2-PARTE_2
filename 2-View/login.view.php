<?php
require_once './smarty-4.2.1/libs/Smarty.class.php';

class loginview{
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showRegister(){
        $this->smarty->display('templates/registro.tpl');
    }

    public function showlogin($error = null){
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
}
?>
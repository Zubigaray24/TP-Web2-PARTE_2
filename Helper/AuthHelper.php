<?php

class AuthHelper {
    function __construct()
    {

    }

    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ".BASE_URL."login");
            die();
        }
    }

    function logged(){
        session_start();
        if(isset($_SESSION["EMAIL"])){
            return "Logeado";
        }
        else{
            return "Deslogeado";
        }
    } 

}
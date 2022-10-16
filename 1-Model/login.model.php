<?php
    class loginmodel{
        private $db;

        function __construct()
        {
            $this->db=new PDO('mysql:host=localhost;'.'dbname=tp;charset=utf8', 'root', '');
        }

        function getUser($email){
            $sentencia = $this->db->prepare("SELECT * FROM tablausuarios WHERE email = ?");
            $sentencia->execute(array($email));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }

        function createUser($usuario, $contraseña){
            $sentencia = $this->db->prepare("INSERT INTO tablausuarios(email, contraseña) VALUES (?, ?)");
            $sentencia->execute(array($usuario, $contraseña));
        }
    }
?>
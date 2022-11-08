<?php
//modelo solo trae las cosas de la bbdd

class genreModel{
    private $db;

    function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;'.'dbname=tp;charset=utf8', 'root', '');
    }

    function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM genero");
        $sentencia->execute();
        $generos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }

    function getCategoria($id){
        $sentencia = $this->db->prepare("SELECT * FROM genero WHERE id_genero = ?");
        $sentencia->execute(array($id));
        $genero = $sentencia->fetch(PDO::FETCH_OBJ);
        return $genero;
    }

// ABM DE GENEROS
    function addGenero($nombregenero){
        $sentencia = $this->db->prepare("INSERT INTO genero(nombregenero) VALUES (?)");
        $sentencia->execute(array($nombregenero));
    }

    function deleteGenero($id){
        $sentencia = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id));
    }

    function editGenero($nombregenero, $id_genero){
        $sentencia = $this->db->prepare("UPDATE genero SET nombregenero=? WHERE id_genero=?");
        $sentencia->execute(array($nombregenero,$id_genero));
    }
}
?>
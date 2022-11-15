<?php
//modelo solo trae las cosas de la bbdd

class gamesModel{
    private $db;

    function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;'.'dbname=tp;charset=utf8', 'root', '');
    }

    function getNombre(){
        $sentencia = $this->db->prepare("SELECT * FROM juegos");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    function getJuego($id){
        $sentencia = $this->db->prepare("SELECT * FROM juegos WHERE id_juego = ?");
        $sentencia->execute(array($id));
        $juego = $sentencia->fetch(PDO::FETCH_OBJ);
        return $juego;
    }

    /*function getIdJuego(){
        $sentencia = $this->db->prepare("SELECT id_juego FROM juegos WHERE id_juego");
        $sentencia->execute(array());
        $id = $sentencia->fetch(PDO::FETCH_OBJ);
        return $id;
    }*/

    function getJuegosPorGenero($id_genero){
        $sentencia = $this->db->prepare("SELECT * FROM juegos WHERE id_genero = ?");
        $sentencia->execute(array($id_genero));
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    //devuelve los juegos por precio de menor a mayor
    function getJuegosPorPrecio(){
        $sentencia = $this->db->prepare("SELECT * FROM juegos ORDER BY precio");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    //devuelve los juegos por orden ascendente alfabeticamente
    function getJuegosPorOrdenAscendenteAlfabeticamente(){
        $sentencia = $this->db->prepare("SELECT * FROM juegos ORDER BY nombre ASC");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    //devuelve los juegos por orden descendente alfabeticamente
    function getJuegosPorOrdenDescendenteAlfabeticamente(){
        $sentencia = $this->db->prepare("SELECT * FROM juegos ORDER BY nombre DESC");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    function getListaIdGenero($id){
        $sentencia = $this->db->prepare("SELECT id_genero FROM juegos WHERE id_genero");
        $sentencia->execute(array($id));
        $id = $sentencia->fetch(PDO::FETCH_OBJ);
        return $id;
    }
// ABM DE JUEGOS
    function addJuego($nombre, $fechalanzamiento, $desarrollador, $precio, $descripcion, $id_genero){
        $sentencia = $this->db->prepare("INSERT INTO juegos (nombre, fechalanzamiento, desarrollador, precio, descripcion, id_genero) VALUES (?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre, $fechalanzamiento, $desarrollador, $precio, $descripcion, $id_genero));
        return $this->db->lastInsertId();
    }

    function deleteJuego($id){
        $sentencia = $this->db->prepare("DELETE FROM juegos WHERE id_juego=?");
        $sentencia->execute(array($id));
    }

    function editJuego($id_juego,$nombre,$fechalanzamiento,$desarrollador,$precio,$descripcion,$id_genero){
        $sentencia = $this->db->prepare("UPDATE juegos SET nombre=?,fechalanzamiento=?,desarrollador=?,precio=?,descripcion=?,id_genero=? WHERE id_juego=?");
        $sentencia->execute(array($nombre,$fechalanzamiento,$desarrollador,$precio,$descripcion,$id_genero,$id_juego));
    }
}
?>
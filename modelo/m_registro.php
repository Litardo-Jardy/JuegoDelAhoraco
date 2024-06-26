<?php 
require_once('conexion.php');

class Registro extends conexion{

    function createRegistro($id_user, $palabra){
        $queryTwo = $this->getConexion()->query("SELECT id_palabra FROM palabra WHERE nombre_palabra ='$palabra'");
        $palabraId = $queryTwo->fetch_assoc();
        $idPalabra = $palabraId['id_palabra'];

       $query = $this-> getConexion() -> prepare("INSERT INTO registro (usuario_id, palabra_id) VALUES ($id_user, $idPalabra)");
       $query -> execute();}
       
    function getRegistro($id){
        $query = $this -> getConexion() -> query("SELECT nombre_palabra, categoria_palabra, user FROM registro WHERE usuario_id = $id");
        return $query;
    }
}?>
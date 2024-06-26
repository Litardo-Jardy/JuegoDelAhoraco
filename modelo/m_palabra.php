<?php 
require_once('conexion.php');

class Palabra extends conexion{
    function createPalabra($nombre, $categoria){
       $query = $this-> getConexion() -> prepare("INSERT INTO palabra (nombre_palabra, categoria_id) VALUES ('$nombre', $categoria)");
       $query -> execute();}

    function getPalabras(){
        $query = $this -> getConexion() -> query("SELECT nombre_palabra FROM palabra");
        $palabras = array();
        if ($query -> num_rows > 0) {
            for ($i = 0; $i < $query -> num_rows; $i++) { 
                $row = $query -> fetch_assoc();
                $item = array(
                    $row['nombre_palabra']);
                array_push($palabras, $item);}
    }return $palabras;}

}?>
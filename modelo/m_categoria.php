<?php 
require_once('conexion.php');

class Categoria extends conexion{
    function getCategorias(){
        $query = $this-> getConexion() -> query("SELECT id_categoria, nombre_categoria AS nombre FROM categoria");
        $categoria = array();
        if($query -> num_rows > 0){
            for($i = 0; $i < $query -> num_rows; $i++){
                $row = $query->fetch_assoc();
                $item = array(
                    $row['id_categoria'],
                    $row['nombre']
                );
                array_push($categoria, $item);}
        }
    return $categoria;}

    function createCategoria($nombre){
       $query = $this-> getConexion() -> prepare("INSERT INTO categoria (nombre_categoria) VALUES ('$nombre')");
       $query -> execute();}
       
}?>
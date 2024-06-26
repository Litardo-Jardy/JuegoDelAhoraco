<?php
require_once('conexion.php');

class User extends conexion {

    function getUser($user, $pass){
        $query = $this -> getConexion() -> query("SELECT id_user, user, pass, tipo  FROM usuario WHERE user = '$user' AND pass = '$pass'");
        session_start();
        if ($query -> num_rows > 0) {
            for ($i = 0; $i < $query -> num_rows; $i++) { 
                $row = $query -> fetch_assoc();
                $_SESSION['id'] = $row['id_user'];
                $_SESSION['user'] =   $row['user'];
                $_SESSION['pass'] = $row['pass'];
                $_SESSION['tipo'] =   $row['tipo'];
                return true;
            } 
        } else {
                return false;}
    }

    function getUsers(){
        $query = $this -> getConexion() -> query("SELECT id_user, user, tipo  FROM usuario");
        $users = array();
        if ($query -> num_rows > 0) {
            for ($i = 0; $i < $query -> num_rows; $i++) { 
                $row = $query -> fetch_assoc();
                $item = array(
                    $row['id_user'],
                    $row['user'],
                    $row['tipo']);
                array_push($users, $item);} 
        }
    return $users;}

    function updateUser($id, $tipo){
        $query = $this -> getConexion() -> prepare("UPDATE usuario SET tipo = $tipo WHERE id_user = $id");
        $query -> execute();}

    function createUser($user, $pass){
        $query = $this -> getConexion() -> prepare("INSERT INTO usuario (user, pass, tipo) VALUES ('$user', '$pass', 2)");
        $query -> execute();}
}?>
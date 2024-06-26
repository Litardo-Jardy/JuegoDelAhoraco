<?php
require('../modelo/m_user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $conf = $_POST['conf'];

    if ($password != $conf) {
        header("Location:../Vista/registro.php?error_message=". urlencode("Las contraseñas no coinciden"));
        exit();
    }else{
        $user = new User();
        $user -> createUser($username, $password);
        header("Location:../Vista/login.php");}
}?>
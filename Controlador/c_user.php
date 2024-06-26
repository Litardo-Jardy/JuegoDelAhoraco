<?php
require('../modelo/m_user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $user = new User();
    if ($user->getUser($username, $password)) {
        session_start();
        $id = $_SESSION['id'];
        if($id == 1){
            header("Location: ../Vista/panelControl.php");
        }else{
            header("Location: ../Vista/dashboard.php");
        }
        exit();
    } else {
        header("Location:../Vista/login.php?error_message=". urlencode("Credenciales incorrectas"));
        exit();
    }
}
?>
<?php 

require('../modelo/m_user.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST['user'];
    
    $dataFormat = explode('-', $data);

    $user = new User();
    $user -> updateUser(intval($dataFormat[0]),  intval($dataFormat[1]) );
    
     header("Location: ../Vista/panelControl.php");}
?>
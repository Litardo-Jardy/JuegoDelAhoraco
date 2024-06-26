<?php 

require('../modelo/m_palabra.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST['categoria'];
    $palabras = $_POST['palabra'];

    $palabra = new Palabra();
    $palabra -> createPalabra($palabras, $categoria);
    
     header("Location: ../Vista/panelControl.php");}

?>
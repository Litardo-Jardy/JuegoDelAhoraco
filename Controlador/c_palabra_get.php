<?php
require('../modelo/m_palabra.php');

$palabra = new Palabra();
$palabras = $palabra->getPalabras();

$json_palabras = json_encode($palabras);

echo $json_palabras;
?>
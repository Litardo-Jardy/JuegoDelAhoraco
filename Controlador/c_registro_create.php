<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require('../modelo/m_registro.php');

$registro = new Registro();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $response = [
        'status' => 'success',
        'received_data' => $data];

    header('Content-Type: application/json');
    echo json_encode($response);

    $id = $_SESSION['id'];
    $registro -> createRegistro($id, $data['palabra']);
    
    
} else {
    echo "Solo se aceptan solicitudes POST.";}
?>
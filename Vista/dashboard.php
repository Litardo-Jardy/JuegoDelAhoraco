<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
</head>
<style>
.btn-registro{
            display: block;
            text-align: start;
            text-decoration: none;
            padding: 10px;
            margin-top: 20px;
            color: #007BFF;
            cursor: pointer;
            font-size: 16px}
.btn-registros{
            display: block;
            text-align: end;
            text-decoration: none;
            padding: 10px;
            margin-top: 20px;
            color: #007BFF;
            cursor: pointer;
            font-size: 16px}
</style>
<body>
<a href="http://localhost/Ahorcado/Vista/login.php" class="btn-registro"><- Volver al login</a>
<?php 
 session_start();
 $id = $_SESSION['id'];
 if ($id == 1){
    echo "<a href='http://localhost/Ahorcado/Vista/panelControl.php' class='btn-registros'>Ir al panel de control-></a>";
 }
?>
    <h1>Juego del Ahorcado</h1>
    <section id="seccion-juego">
        <p>El objetivo del juego es que adivines la palabra enmascarada para esto tienes <b><span id = "span-intestos"></span> intentos</b></p>
        <p>Palabra:</p>
        <h3 id="h3-palabra"></h3>
        <input type="text" id="text-ingreso">
        <button id="boton-verificar">Verificar</button>
    </section>
    <section id="seccion-mensajes">
    </section>
    <section>
        <button id="boton-reiniciar">Reiniciar</button>
    </section>
    <section>
        <button id="boton-iniciar">iniciar</button>
    </section>

    <script>
        let palabras = <?php include('../Controlador/c_palabra_get.php');?>;
    </script>

    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administrador</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: auto;
            padding: 20px}

        .container_general{
            width: 100%;
            display: flex;
            align-item: center;
            justify-content: center}
        
        .container {
            width: 70%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)}

        .container_list{
           width: 40%;
        }
        .container_list_users {
           margin-top: 30px;
           width: 100%;
           background-color: #fff;
           padding: 20px;
           border-radius: 8px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)}

        .container_list_categorias {
           heigth: 100px;
           margin-top: 30px;
           width: 100%;
           background-color: #fff;
           padding: 20px;
           border-radius: 8px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)}

        .title{
            width: 100%;}

        .title_panel{
            text-align: center;}

        /* Estilos para formularios */
        .form {
            width: 35%;
            height: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 29px;}
        
        form label {
            margin-top: 10px;
            display: block;
            margin-bottom: 10px;
            color: #333}
        
        form input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;}
            
        form select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box}
        
        form button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            width: 100%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;}
        
        form button[type="submit"]:hover {
            background-color: #45a049;
        }
                    
        h2 {
            text-align: start;
            color: #333}

        ul {
            list-style-type: none;
            padding: 0}

        li {
            background-color: #eaeaea;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px}
        .btn-registro{
            display: block;
            text-align: start;
            text-decoration: none;
            padding: 10px;
            margin-top: 20px;
            color: #007BFF;
            cursor: pointer;
            font-size: 16px}
    </style>
</head>
<body>
<a href="http://localhost/Ahorcado/Vista/dashboard.php" class="btn-registro"><- Ir al juego</a>
    <div class="container_general">
      <div class="container">
        <div class="title">
             <h1 class="title_panel">Panel de administrador</h1>
        </div>
        <div class="container_list">
             <?php include('../Controlador/c_categoria_list.php'); ?>
             <?php include('../Controlador/c_user_list.php'); ?>
        </div>

        <div class="form">
          <h2>Crear nueva palabra: </h2>
          <form action="../Controlador/c_palabra_create.php" method="POST"> 
            <label for="categoria">Categorias:</label>
            <?php include('../Controlador/c_categoria_option.php'); ?>

            <label for="pass">Palabra:</label>
            <input type="text" id="palabra" name="palabra" required>
            
            <button type="submit">Crear</button>
          </form>
        </div>
    </div>
        
</body>
</html>
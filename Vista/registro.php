<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh}

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 35%}

        .container h2 {
            text-align: center;
            color: #333}

        .form-group {
            margin-bottom: 15px;}

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;}

        .form-group input {
            width: 92%;
            margin: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;}

        .form-group input:focus {
            border-color: #4CAF50;
            outline: none;}

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;}

        .btn-submit:hover {
            background-color: #45a049}
        
        .btn-registro{
            display: block;
            width: 96%;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px}
        
        .error-message {
            color: red;
            margin-bottom: 15px;
            text-align: center}
    </style>
</head>
<body>

    <div class="container">
        <h2>Registro</h2>
        <?php
        if (isset($_GET['error_message'])) {
            echo '<div class="error-message">' . htmlspecialchars($_GET['error_message']) . '</div>';}
        ?>
        <form action="../Controlador/c_registro.php" method="POST">
            <div class="form-group">
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user" required>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="form-group">
                <label for="pass">Cofirmar contraseña:</label>
                <input type="password" id="conf" name="conf" required>
            </div>
            <button type="submit" class="btn-submit">Registrase</button>
        </form>
        <a href="http://localhost/Ahorcado/Vista/login.php" class="btn-registro">Iniciar sesion</a>
    </div>

</body>
</html>
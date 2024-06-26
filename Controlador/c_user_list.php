<?php
require('../modelo/m_user.php');

$userModel = new User();
$users = $userModel->getUsers();

?>

<div class="container_list_users">
    <h2>Usuarios: </h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
            <?php echo $user[0]; ?>:  
            <?php echo $user[1]; ?>          -                           
            <?php 
                if($user[2] == 1) { 
                echo "Administrador";
                } else{ echo "Usuario";}?>
            <form action="../Controlador/c_user_update.php" method="POST" style="display: inline;">
                <input type="hidden" name='user' value='<?php echo $user[0];?>-<?php if($user[2] == 1) { 
                echo "2";
                } else{ echo "1";};?>'>
                <button type="submit">Cambiar</button>
            </form>    
            </li>
        <?php endforeach; ?>
    </ul>
</div>
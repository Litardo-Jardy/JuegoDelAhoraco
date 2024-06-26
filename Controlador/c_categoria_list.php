<?php
require_once('../modelo/m_categoria.php');

$categorias = new Categoria();
$categorias = $categorias->getCategorias();

?>

<div class="container_list_categorias">
    <h2>Categorias: </h2>
    <ul>
        <?php foreach ($categorias as $categoria): ?>
            <li><?php echo $categoria[0]; ?>:  
            <?php echo $categoria[1]; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
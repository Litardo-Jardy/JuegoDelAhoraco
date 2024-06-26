<?php
require_once('../modelo/m_categoria.php');

$categorias = new Categoria();
$categorias = $categorias->getCategorias();

?>

<select name="categoria" id="categoria">
        <?php foreach ($categorias as $categoria): ?>
        <option value= <?php echo $categoria[0]; ?> > 
            <?php echo $categoria[1]; ?>
        </option>
        <?php endforeach; ?>
</select>
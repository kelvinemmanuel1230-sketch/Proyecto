<?php
include("../../cn.php");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$editar = false;
$autor = [];

if ($id > 0) {
    $editar = true;
    $sql = "SELECT * FROM tb_autores WHERE ID_Autor = '$id'";
    $resultado = mysqli_query($cn, $sql);
    $autor = mysqli_fetch_assoc($resultado);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $editar ? 'Editar' : 'Nuevo'; ?> Autor</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo"><?php echo $editar ? 'Editar Autor' : 'Registrar Nuevo Autor'; ?></div>

<form class="formulario" method="POST" action="<?php echo $editar ? '../../pro.php' : '../../insertar.php'; ?>">
    <?php if ($editar): ?>
    <input type="hidden" name="tabla" value="autores">
    <input type="hidden" name="ID_Autor" value="<?php echo $autor['ID_Autor']; ?>">
    <?php endif; ?>

    <div class="campo">
        <label>Nombre</label>
        <input type="text" name="Nombre" required value="<?php echo $editar ? $autor['Nombre'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Nacionalidad</label>
        <input type="text" name="Nacionalidad" value="<?php echo $editar ? $autor['Nacionalidad'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="Fecha_Nacimiento" value="<?php echo $editar ? $autor['Fecha_Nacimiento'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Estado</label>
        <select name="Estado">
            <option value="Disponible" <?php echo ($editar && $autor['Estado'] == 'Disponible') ? 'selected' : ''; ?>>Disponible</option>
            <option value="Inactivo" <?php echo ($editar && $autor['Estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
        </select>
    </div>

    <div class="formulario-acciones">
        <button class="button" type="submit"><?php echo $editar ? 'Actualizar' : 'Registrar'; ?></button>
        <a href="../tablas/autores.php" class="button secundario">Cancelar</a>
    </div>
</form>

</body>
</html>
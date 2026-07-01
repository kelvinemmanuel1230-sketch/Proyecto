<?php
include("../../cn.php");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$editar = false;
$libro = [];

if ($id > 0) {
    $editar = true;
    $sql = "SELECT * FROM tb_libros WHERE ID_Libro = '$id'";
    $resultado = mysqli_query($cn, $sql);
    $libro = mysqli_fetch_assoc($resultado);
}

$autores = mysqli_query($cn, "SELECT * FROM tb_autores WHERE Estado='Disponible'");
$editoriales = mysqli_query($cn, "SELECT * FROM tb_editoriales WHERE Estado='Disponible'");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $editar ? 'Editar' : 'Nuevo'; ?> Libro</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo"><?php echo $editar ? 'Editar Libro' : 'Registrar Nuevo Libro'; ?></div>

<form class="formulario" method="POST" action="<?php echo $editar ? '../../pro.php' : '../../insertar.php'; ?>">
    <?php if ($editar): ?>
    <input type="hidden" name="tabla" value="libros">
    <input type="hidden" name="ID_Libro" value="<?php echo $libro['ID_Libro']; ?>">
    <?php endif; ?>

    <div class="campo">
        <label>Título</label>
        <input type="text" name="Titulo" required value="<?php echo $editar ? $libro['Titulo'] : ''; ?>">
    </div>

    <div class="campo">
        <label>ISBN</label>
        <input type="text" name="ISBN" value="<?php echo $editar ? $libro['ISBN'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Año de Publicación</label>
        <input type="year" name="Anio_Publicacion" value="<?php echo $editar ? $libro['Anio_Publicacion'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Descripción</label>
        <textarea name="Descripcion"><?php echo $editar ? $libro['Descripcion'] : ''; ?></textarea>
    </div>

    <div class="campo">
        <label>Autor</label>
        <select name="ID_Autor" required>
            <option value="">Seleccionar Autor</option>
            <?php while($row = mysqli_fetch_assoc($autores)) { ?>
            <option value="<?php echo $row['ID_Autor']; ?>" <?php echo ($editar && $libro['ID_Autor'] == $row['ID_Autor']) ? 'selected' : ''; ?>><?php echo $row['Nombre']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="campo">
        <label>Editorial</label>
        <select name="ID_Editorial" required>
            <option value="">Seleccionar Editorial</option>
            <?php $editoriales = mysqli_query($cn, "SELECT * FROM tb_editoriales WHERE Estado='Disponible'"); while($row = mysqli_fetch_assoc($editoriales)) { ?>
            <option value="<?php echo $row['ID_Editorial']; ?>" <?php echo ($editar && $libro['ID_Editorial'] == $row['ID_Editorial']) ? 'selected' : ''; ?>><?php echo $row['Nombre']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="campo">
        <label>Estado</label>
        <select name="Estado">
            <option value="Disponible" <?php echo ($editar && $libro['Estado'] == 'Disponible') ? 'selected' : ''; ?>>Disponible</option>
            <option value="Prestado" <?php echo ($editar && $libro['Estado'] == 'Prestado') ? 'selected' : ''; ?>>Prestado</option>
            <option value="Inactivo" <?php echo ($editar && $libro['Estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
        </select>
    </div>

    <div class="formulario-acciones">
        <button class="button" type="submit"><?php echo $editar ? 'Actualizar' : 'Registrar'; ?></button>
        <a href="../tablas/libros.php" class="button secundario">Cancelar</a>
    </div>
</form>

</body>
</html>
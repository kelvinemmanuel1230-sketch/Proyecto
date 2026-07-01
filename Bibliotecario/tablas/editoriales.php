<?php
include("../../cn.php");

$sql = "SELECT * FROM tb_editoriales";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editoriales - Biblioteca</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo">Gestión de Editoriales</div>

<div class="formulario-acciones">
    <a href="../formularios/editoriales.php" class="button">+ Agregar Nueva Editorial</a>
    <a href="../Inicio.html" class="button secundario">Volver</a>
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Editorial']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <a href="../formularios/editoriales.php?id=<?php echo $row['ID_Editorial']; ?>" class="button editar">Editar</a>
            </td>
            <td>
                <a href="../../eli.php?tabla=editoriales&id=<?php echo $row['ID_Editorial']; ?>" class="button eliminar" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
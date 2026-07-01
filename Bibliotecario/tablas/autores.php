<?php
include("../../cn.php");

$sql = "SELECT * FROM tb_autores";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores - Biblioteca</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo">Gestión de Autores</div>

<div class="formulario-acciones">
    <a href="../formularios/autores.php" class="button">+ Agregar Nuevo Autor</a>
    <a href="../Inicio.html" class="button secundario">Volver</a>
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha Nacimiento</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Autor']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Nacionalidad']; ?></td>
            <td><?php echo $row['Fecha_Nacimiento']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <a href="../formularios/autores.php?id=<?php echo $row['ID_Autor']; ?>" class="button editar">Editar</a>
            </td>
            <td>
                <a href="../../eli.php?tabla=autores&id=<?php echo $row['ID_Autor']; ?>" class="button eliminar" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
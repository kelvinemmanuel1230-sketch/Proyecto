<?php
include("../../cn.php");

$sql = "SELECT p.*, l.Titulo, CONCAT(e.Nombres, ' ', e.Apellidos) as NombreEstudiante, CONCAT(em.Nombres, ' ', em.Apellidos) as NombreEmpleado
        FROM tb_prestamos p
        LEFT JOIN tb_libros l ON p.ID_Libro = l.ID_Libro
        LEFT JOIN tb_estudiantes e ON p.ID_Estudiante = e.ID_Estudiante
        LEFT JOIN tb_empleados em ON p.ID_Empleado = em.ID_Empleado";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos - Biblioteca</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo">Gestión de Préstamos</div>

<div class="formulario-acciones">
    <a href="../formularios/prestamos.php" class="button">+ Nuevo Préstamo</a>
    <a href="../Inicio.html" class="button secundario">Volver</a>
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Estudiante</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['ID_Prestamo']; ?></td>
            <td><?php echo $row['Titulo']; ?></td>
            <td><?php echo $row['NombreEstudiante']; ?></td>
            <td><?php echo $row['Fecha_Prestamo']; ?></td>
            <td><?php echo $row['Fecha_Devolucion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
                <a href="../formularios/prestamos.php?id=<?php echo $row['ID_Prestamo']; ?>" class="button editar">Editar</a>
            </td>
            <td>
                <a href="../../eli.php?tabla=prestamos&id=<?php echo $row['ID_Prestamo']; ?>" class="button eliminar" onclick="return confirm('¿Está seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
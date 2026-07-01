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
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn-small { padding: 5px 10px; margin: 2px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Gestión de Préstamos</h2>
        
        <a href="../formularios/prestamos.php" class="btn btn-success">+ Nuevo Préstamo</a>
        <a href="../Inicio.html" class="btn btn-secondary">Volver</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libro</th>
                    <th>Estudiante</th>
                    <th>Fecha Préstamo</th>
                    <th>Fecha Devolución</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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
                        <a href="../formularios/prestamos.php?id=<?php echo $row['ID_Prestamo']; ?>" class="btn btn-primary btn-small">Modificar</a>
                        <a href="../../eli.php?tabla=prestamos&id=<?php echo $row['ID_Prestamo']; ?>" class="btn btn-danger btn-small" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
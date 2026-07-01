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
        <h2>Gestión de Autores</h2>
        
        <a href="../formularios/autores.php" class="btn btn-success">+ Agregar Nuevo Autor</a>
        <a href="../Inicio.html" class="btn btn-secondary">Volver</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nacionalidad</th>
                    <th>Fecha Nacimiento</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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
                        <a href="../formularios/autores.php?id=<?php echo $row['ID_Autor']; ?>" class="btn btn-primary btn-small">Modificar</a>
                        <a href="../../eli.php?tabla=autores&id=<?php echo $row['ID_Autor']; ?>" class="btn btn-danger btn-small" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
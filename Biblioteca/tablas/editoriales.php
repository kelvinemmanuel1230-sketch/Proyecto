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
        <h2>Gestión de Editoriales</h2>
        
        <a href="../formularios/editoriales.php" class="btn btn-success">+ Agregar Nueva Editorial</a>
        <a href="../Inicio.html" class="btn btn-secondary">Volver</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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
                        <a href="../formularios/editoriales.php?id=<?php echo $row['ID_Editorial']; ?>" class="btn btn-primary btn-small">Modificar</a>
                        <a href="../../eli.php?tabla=editoriales&id=<?php echo $row['ID_Editorial']; ?>" class="btn btn-danger btn-small" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include("../../cn.php");

$sql = "SELECT l.*, a.Nombre as NombreAutor, e.Nombre as NombreEditorial 
        FROM tb_libros l
        LEFT JOIN tb_autores a ON l.ID_Autor = a.ID_Autor
        LEFT JOIN tb_editoriales e ON l.ID_Editorial = e.ID_Editorial";
$resultado = mysqli_query($cn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros - Biblioteca</title>
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
        <h2>Gestión de Libros</h2>
        
        <a href="../formularios/libros.php" class="btn btn-success">+ Agregar Nuevo Libro</a>
        <a href="../Inicio.html" class="btn btn-secondary">Volver</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Año</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $row['ID_Libro']; ?></td>
                    <td><?php echo $row['Titulo']; ?></td>
                    <td><?php echo $row['ISBN']; ?></td>
                    <td><?php echo $row['Anio_Publicacion']; ?></td>
                    <td><?php echo $row['NombreAutor']; ?></td>
                    <td><?php echo $row['NombreEditorial']; ?></td>
                    <td><?php echo $row['Estado']; ?></td>
                    <td>
                        <a href="../formularios/libros.php?id=<?php echo $row['ID_Libro']; ?>" class="btn btn-primary btn-small">Modificar</a>
                        <a href="../../eli.php?tabla=libros&id=<?php echo $row['ID_Libro']; ?>" class="btn btn-danger btn-small" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
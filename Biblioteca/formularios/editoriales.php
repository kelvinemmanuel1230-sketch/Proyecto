<?php
include("../../cn.php");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$editar = false;
$editorial = [];

if ($id > 0) {
    $editar = true;
    $sql = "SELECT * FROM tb_editoriales WHERE ID_Editorial = '$id'";
    $resultado = mysqli_query($cn, $sql);
    $editorial = mysqli_fetch_assoc($resultado);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $editar ? 'Editar' : 'Nueva'; ?> Editorial</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container">
        <h2><?php echo $editar ? 'Editar Editorial' : 'Registrar Nueva Editorial'; ?></h2>
        
        <form method="POST" action="<?php echo $editar ? '../../pro.php' : '../../insertar.php'; ?>">
            <?php if ($editar): ?>
            <input type="hidden" name="tabla" value="editoriales">
            <input type="hidden" name="ID_Editorial" value="<?php echo $editorial['ID_Editorial']; ?>">
            <?php endif; ?>
            
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="Nombre" required value="<?php echo $editar ? $editorial['Nombre'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Dirección:</label>
                <input type="text" name="Direccion" value="<?php echo $editar ? $editorial['Direccion'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Teléfono:</label>
                <input type="text" name="Telefono" value="<?php echo $editar ? $editorial['Telefono'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Correo:</label>
                <input type="email" name="Correo" value="<?php echo $editar ? $editorial['Correo'] : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Estado:</label>
                <select name="Estado">
                    <option value="Disponible" <?php echo ($editar && $editorial['Estado'] == 'Disponible') ? 'selected' : ''; ?>>Disponible</option>
                    <option value="Inactivo" <?php echo ($editar && $editorial['Estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                </select>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><?php echo $editar ? 'Actualizar' : 'Registrar'; ?></button>
                <a href="../tablas/editoriales.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include("../../cn.php");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$editar = false;
$prestamo = [];

if ($id > 0) {
    $editar = true;
    $sql = "SELECT * FROM tb_prestamos WHERE ID_Prestamo = '$id'";
    $resultado = mysqli_query($cn, $sql);
    $prestamo = mysqli_fetch_assoc($resultado);
}

$libros = mysqli_query($cn, "SELECT * FROM tb_libros WHERE Estado='Disponible'");
$estudiantes = mysqli_query($cn, "SELECT * FROM tb_estudiantes WHERE Estado='Activo'");
$empleados = mysqli_query($cn, "SELECT * FROM tb_empleados WHERE Estado='Activo'");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $editar ? 'Editar' : 'Nuevo'; ?> Préstamo</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<div class="tabla-titulo"><?php echo $editar ? 'Editar Préstamo' : 'Registrar Nuevo Préstamo'; ?></div>

<form class="formulario" method="POST" action="<?php echo $editar ? '../../pro.php' : '../../insertar.php'; ?>">
    <?php if ($editar): ?>
    <input type="hidden" name="tabla" value="prestamos">
    <input type="hidden" name="ID_Prestamo" value="<?php echo $prestamo['ID_Prestamo']; ?>">
    <?php endif; ?>

    <div class="campo">
        <label>Libro</label>
        <select name="ID_Libro" required>
            <option value="">Seleccionar Libro</option>
            <?php $libros = mysqli_query($cn, "SELECT * FROM tb_libros"); while($row = mysqli_fetch_assoc($libros)) { ?>
            <option value="<?php echo $row['ID_Libro']; ?>" <?php echo ($editar && $prestamo['ID_Libro'] == $row['ID_Libro']) ? 'selected' : ''; ?>><?php echo $row['Titulo']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="campo">
        <label>Estudiante</label>
        <select name="ID_Estudiante" required>
            <option value="">Seleccionar Estudiante</option>
            <?php $estudiantes = mysqli_query($cn, "SELECT * FROM tb_estudiantes WHERE Estado='Activo'"); while($row = mysqli_fetch_assoc($estudiantes)) { ?>
            <option value="<?php echo $row['ID_Estudiante']; ?>" <?php echo ($editar && $prestamo['ID_Estudiante'] == $row['ID_Estudiante']) ? 'selected' : ''; ?>><?php echo $row['Nombres'] . ' ' . $row['Apellidos']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="campo">
        <label>Empleado Responsable</label>
        <select name="ID_Empleado" required>
            <option value="">Seleccionar Empleado</option>
            <?php $empleados = mysqli_query($cn, "SELECT * FROM tb_empleados WHERE Estado='Activo'"); while($row = mysqli_fetch_assoc($empleados)) { ?>
            <option value="<?php echo $row['ID_Empleado']; ?>" <?php echo ($editar && $prestamo['ID_Empleado'] == $row['ID_Empleado']) ? 'selected' : ''; ?>><?php echo $row['Nombres'] . ' ' . $row['Apellidos']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="campo">
        <label>Fecha de Préstamo</label>
        <input type="date" name="Fecha_Prestamo" required value="<?php echo $editar ? $prestamo['Fecha_Prestamo'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Fecha de Devolución Esperada</label>
        <input type="date" name="Fecha_Devolucion" value="<?php echo $editar ? $prestamo['Fecha_Devolucion'] : ''; ?>">
    </div>

    <div class="campo">
        <label>Observaciones</label>
        <textarea name="Observaciones"><?php echo $editar ? $prestamo['Observaciones'] : ''; ?></textarea>
    </div>

    <div class="campo">
        <label>Estado</label>
        <select name="Estado">
            <option value="Pendiente" <?php echo ($editar && $prestamo['Estado'] == 'Pendiente') ? 'selected' : ''; ?>>Pendiente</option>
            <option value="Devuelto" <?php echo ($editar && $prestamo['Estado'] == 'Devuelto') ? 'selected' : ''; ?>>Devuelto</option>
        </select>
    </div>

    <div class="formulario-acciones">
        <button class="button" type="submit"><?php echo $editar ? 'Actualizar' : 'Registrar'; ?></button>
        <a href="../tablas/prestamos.php" class="button secundario">Cancelar</a>
    </div>
</form>

</body>
</html>
 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$empleados = "SELECT * FROM tb_empleados WHERE ID_Empleado = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Empleado</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn, $empleados);

if($row = mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="empleados">

<input type="hidden" name="ID_Empleado" value="<?= $row['ID_Empleado'] ?>">

<div class="campo">
<label>Nombres</label>
<input type="text" name="Nombres" value="<?= $row['Nombres'] ?>" >
</div>

<div class="campo">
<label>Apellidos</label>
<input type="text" name="Apellidos" value="<?= $row['Apellidos'] ?>" >
</div>

<div class="campo">
<label>Cédula</label>
<input type="text" name="Cedula" value="<?= $row['Cedula'] ?>" >
</div>

<div class="campo">
<label>Teléfono</label>
<input type="text" name="Telefono" value="<?= $row['Telefono'] ?>" >
</div>

<div class="campo">
<label>Correo</label>
<input type="email" name="Correo" value="<?= $row['Correo'] ?>" >
</div>

<div class="campo">
<label>Dirección</label>
<input type="text" name="Direccion" value="<?= $row['Direccion'] ?>" >
</div>

<div class="campo">
<label>Fecha Ingreso</label>
<input type="date" name="Fecha_Ingreso" value="<?= $row['Fecha_Ingreso'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
</div>

<div class="campo">
<label>ID Usuario</label>
<input type="number" name="ID_Usuario" value="<?= $row['ID_Usuario'] ?>" >
</div>

<br>

<div class="formulario-acciones">
<button class="button" type="submit" >
Guardar Cambios
</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>

<?php
}
?>

</body>
</html>
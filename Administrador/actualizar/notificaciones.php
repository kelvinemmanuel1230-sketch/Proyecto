 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$notificaciones = "SELECT * FROM tb_notificaciones WHERE ID_Notificacion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Notificación</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$notificaciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="notificaciones">
<input type="hidden" name="ID_Notificacion" value="<?= $row['ID_Notificacion'] ?>">

<div class="campo">
<label>Tipo</label>
<input type="text" name="Tipo" value="<?= $row['Tipo'] ?>" >
</div>

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
</div>

<div class="campo">
<label>Mensaje</label>
<input type="text" name="Mensaje" value="<?= $row['Mensaje'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
</div>

<div class="campo">
<label>ID Empleado</label>
<input type="number" name="ID_Empleado" value="<?= $row['ID_Empleado'] ?>" >
</div>

<br>

<div class="formulario-acciones">
<button class="button" type="submit" >Guardar Cambios</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>

<?php } ?>

</body>
</html>
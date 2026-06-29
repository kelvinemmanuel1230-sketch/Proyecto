 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$permisos = "SELECT * FROM tb_permisos_salida WHERE ID_Permiso = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Permiso</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$permisos);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="permisos">
<input type="hidden" name="ID_Permiso" value="<?= $row['ID_Permiso'] ?>">

<div class="campo">
<label>Fecha Salida</label>
<input type="date" name="Fecha_Salida" value="<?= $row['Fecha_Salida'] ?>" >
</div>

<div class="campo">
<label>Motivo</label>
<input type="text" name="Motivo" value="<?= $row['Motivo'] ?>" >
</div>

<div class="campo">
<label>Autorizado Por</label>
<input type="text" name="Autorizado_Por" value="<?= $row['Autorizado_Por'] ?>" >
</div>

<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" value="<?= $row['ID_Estudiante'] ?>" >
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
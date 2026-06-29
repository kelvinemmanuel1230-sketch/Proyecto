 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$deteccion = "SELECT * FROM tb_deteccion_necesidades WHERE ID_Deteccion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Detección</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$deteccion);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="deteccion">
<input type="hidden" name="ID_Deteccion" value="<?= $row['ID_Deteccion'] ?>">

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
</div>

<div class="campo">
<label>Necesidad</label>
<input type="text" name="Necesidad" value="<?= $row['Necesidad'] ?>" >
</div>

<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones" value="<?= $row['Observaciones'] ?>" >
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
 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$historial = "SELECT * FROM tb_historial_medico WHERE ID_Historial = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Historial Médico</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$historial);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="historial">
<input type="hidden" name="ID_Historial" value="<?= $row['ID_Historial'] ?>">

<div class="campo">
<label>Diagnóstico</label>
<input type="text" name="Diagnostico" value="<?= $row['Diagnostico'] ?>" >
</div>

<div class="campo">
<label>Tratamiento</label>
<input type="text" name="Tratamiento" value="<?= $row['Tratamiento'] ?>" >
</div>

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
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
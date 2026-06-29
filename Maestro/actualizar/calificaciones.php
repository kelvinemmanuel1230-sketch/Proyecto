 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$calificaciones = "SELECT * FROM tb_calificaciones WHERE ID_Calificacion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Calificación</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$calificaciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="calificaciones">
<input type="hidden" name="ID_Calificacion" value="<?= $row['ID_Calificacion'] ?>">

<div class="campo">
<label>Nota</label>
<input type="text" name="Nota" value="<?= $row['Nota'] ?>" >
</div>

<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones" value="<?= $row['Observaciones'] ?>" >
</div>

<div class="campo">
<label>Fecha Registro</label>
<input type="date" name="Fecha_Registro" value="<?= $row['Fecha_Registro'] ?>" >
</div>

<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" value="<?= $row['ID_Estudiante'] ?>" >
</div>

<div class="campo">
<label>ID Asignación</label>
<input type="number" name="ID_Asignacion" value="<?= $row['ID_Asignacion'] ?>" >
</div>

<div class="campo">
<label>ID Período</label>
<input type="number" name="ID_Periodo" value="<?= $row['ID_Periodo'] ?>" >
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
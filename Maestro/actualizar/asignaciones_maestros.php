 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$asignaciones = "SELECT * FROM tb_asignaciones_maestros WHERE ID_Asignacion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Asignación</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$asignaciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="asignaciones">
<input type="hidden" name="ID_Asignacion" value="<?= $row['ID_Asignacion'] ?>">

<div class="campo">
<label>Fecha Asignación</label>
<input type="date" name="Fecha_Asignacion" value="<?= $row['Fecha_Asignacion'] ?>" >
</div>

<div class="campo">
<label>Año Escolar</label>
<input type="text" name="Ano_Escolar" value="<?= $row['Ano_Escolar'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
</div>

<div class="campo">
<label>ID Maestro</label>
<input type="number" name="ID_Maestro" value="<?= $row['ID_Maestro'] ?>" >
</div>

<div class="campo">
<label>ID Materia</label>
<input type="number" name="ID_Materia" value="<?= $row['ID_Materia'] ?>" >
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
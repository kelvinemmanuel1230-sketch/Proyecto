 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$periodos = "SELECT * FROM tb_periodos_academicos WHERE ID_Periodo = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Período Académico</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$periodos);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="periodos">
<input type="hidden" name="ID_Periodo" value="<?= $row['ID_Periodo'] ?>">

<div class="campo">
<label>Nombre Período</label>
<input type="text" name="Nombre_Periodo" value="<?= $row['Nombre_Periodo'] ?>" >
</div>

<div class="campo">
<label>Fecha Inicio</label>
<input type="date" name="Fecha_Inicio" value="<?= $row['Fecha_Inicio'] ?>" >
</div>

<div class="campo">
<label>Fecha Fin</label>
<input type="date" name="Fecha_Fin" value="<?= $row['Fecha_Fin'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
</div>

<br>

<div class="formulario-acciones">
<button class="button" type="submit" >
Guardar Cambios
</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>

<?php } ?>

</body>
</html>
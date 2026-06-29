 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$reinscripciones = "SELECT * FROM tb_reinscripciones WHERE ID_Reinscripcion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Reinscripción</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$reinscripciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="reinscripciones">
<input type="hidden" name="ID_Reinscripcion" value="<?= $row['ID_Reinscripcion'] ?>">

<div class="campo">
<label>Fecha Reinscripción</label>
<input type="date" name="Fecha_Reinscripcion" value="<?= $row['Fecha_Reinscripcion'] ?>" >
</div>

<div class="campo">
<label>Periodo</label>
<input type="text" name="Periodo" value="<?= $row['Periodo'] ?>" >
</div>

<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones" value="<?= $row['Observaciones'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
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
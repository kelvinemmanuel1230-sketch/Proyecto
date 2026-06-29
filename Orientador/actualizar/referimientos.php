 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$referimientos = "SELECT * FROM tb_referimientos WHERE ID_Referimiento = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Referimiento</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$referimientos);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="referimientos">
<input type="hidden" name="ID_Referimiento" value="<?= $row['ID_Referimiento'] ?>">

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
</div>

<div class="campo">
<label>Motivo</label>
<input type="text" name="Motivo" value="<?= $row['Motivo'] ?>" >
</div>

<div class="campo">
<label>Descripción</label>
<input type="text" name="Descripcion" value="<?= $row['Descripcion'] ?>" >
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
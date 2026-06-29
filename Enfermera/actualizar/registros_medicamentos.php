 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$medicamentos = "SELECT * FROM tb_registro_medicamentos WHERE ID_Registro = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Medicamento</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$medicamentos);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="medicamentos">
<input type="hidden" name="ID_Registro" value="<?= $row['ID_Registro'] ?>">

<div class="campo">
<label>Medicamento</label>
<input type="text" name="Medicamento" value="<?= $row['Medicamento'] ?>" >
</div>

<div class="campo">
<label>Dosis</label>
<input type="text" name="Dosis" value="<?= $row['Dosis'] ?>" >
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
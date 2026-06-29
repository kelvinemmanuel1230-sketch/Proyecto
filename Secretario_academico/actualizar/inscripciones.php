 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$inscripciones = "SELECT * FROM tb_inscripciones WHERE ID_Inscripcion = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Inscripción</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn,$inscripciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="inscripciones">
<input type="hidden" name="ID_Inscripcion" value="<?= $row['ID_Inscripcion'] ?>">

<div class="campo">
<label>Fecha Inscripción</label>
<input type="date" name="Fecha_Inscripcion" value="<?= $row['Fecha_Inscripcion'] ?>" >
</div>

<div class="campo">
<label>Tipo</label>
<input type="text" name="Tipo" value="<?= $row['Tipo'] ?>" >
</div>

<div class="campo">
<label>Certificado Médico</label>
<input type="text" name="Certificado_Medico" value="<?= $row['Certificado_Medico'] ?>" >
</div>

<div class="campo">
<label>Fotos</label>
<input type="text" name="Fotos" value="<?= $row['Fotos'] ?>" >
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
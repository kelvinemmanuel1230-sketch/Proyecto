 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$inspecciones = "SELECT * FROM tb_inspecciones_alimentacion WHERE ID_Inspeccion = '$id'";

$resultados = mysqli_query($cn,$inspecciones);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<input type="hidden" name="tabla" value="inspecciones">
<input type="hidden" name="ID_Inspeccion" value="<?= $row['ID_Inspeccion'] ?>">

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
</div>

<div class="campo">
<label>Resultado</label>
<input type="text" name="Resultado" value="<?= $row['Resultado'] ?>" >
</div>

<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones" value="<?= $row['Observaciones'] ?>" >
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
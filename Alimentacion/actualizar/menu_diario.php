 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$menu = "SELECT * FROM tb_menu_diario WHERE ID_Menu = '$id'";

$resultados = mysqli_query($cn,$menu);

if($row=mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<input type="hidden" name="tabla" value="menu">
<input type="hidden" name="ID_Menu" value="<?= $row['ID_Menu'] ?>">

<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" value="<?= $row['Fecha'] ?>" >
</div>

<div class="campo">
<label>Desayuno</label>
<input type="text" name="Desayuno" value="<?= $row['Desayuno'] ?>" >
</div>

<div class="campo">
<label>Almuerzo</label>
<input type="text" name="Almuerzo" value="<?= $row['Almuerzo'] ?>" >
</div>

<div class="campo">
<label>Merienda</label>
<input type="text" name="Merienda" value="<?= $row['Merienda'] ?>" >
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
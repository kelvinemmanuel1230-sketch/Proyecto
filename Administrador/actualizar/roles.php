<?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$roles = "SELECT * FROM tb_roles WHERE ID_Rol = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Rol</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn, $roles);

if($row = mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="roles">

<input type="hidden" name="ID_Rol" value="<?= $row['ID_Rol'] ?>">

<div class="campo">
<label>Nombre Rol</label>
<input type="text" name="Nombre_Rol" value="<?= $row['Nombre_Rol'] ?>" >
</div>

<div class="campo">
<label>Descripción</label>
<input type="text" name="Descripcion" value="<?= $row['Descripcion'] ?>" >
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

<?php
}
?>

</body>
</html>
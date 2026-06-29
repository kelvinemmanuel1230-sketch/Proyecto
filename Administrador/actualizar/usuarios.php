 <?php
include("../../cn.php");

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$usuarios = "SELECT * FROM tb_usuarios WHERE ID_Usuario = '$id'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuario</title>
<link rel="stylesheet" href="../../css/style.css">
</head>

<body>

<?php
$resultados = mysqli_query($cn, $usuarios);

if($row = mysqli_fetch_assoc($resultados)){
?>

<form class="formulario" action="../../pro.php" method="POST">

<input type="hidden" name="tabla" value="usuarios">

<input type="hidden" name="ID_Usuario" value="<?= $row['ID_Usuario'] ?>">

<div class="campo">
<label>Usuario</label>
<input type="text" name="Usuario" value="<?= $row['Usuario'] ?>" >
</div>

<div class="campo">
<label>Clave</label>
<input type="text" name="Clave" value="<?= $row['Clave'] ?>" >
</div>

<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" value="<?= $row['Estado'] ?>" >
</div>

<div class="campo">
<label>ID Rol</label>
<input type="number" name="ID_Rol" value="<?= $row['ID_Rol'] ?>" >
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
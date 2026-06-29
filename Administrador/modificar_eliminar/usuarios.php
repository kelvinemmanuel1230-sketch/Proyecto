 <?php
include("../../cn.php");

$usuarios = "SELECT * FROM tb_usuarios";
?>

<div class="tabla-titulo">Datos de Usuarios</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Usuario</th>
<th>Clave</th>
<th>ID Rol</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$usuarios);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Usuario'] ?></td>
<td><?= $row['Usuario'] ?></td>
<td><?= $row['Clave'] ?></td>
<td><?= $row['ID_Rol'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/usuarios.php?id=<?= $row['ID_Usuario'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=usuarios&id=<?= $row['ID_Usuario'] ?>"
onclick="return confirm('¿Eliminar?')">
Eliminar
</a>
</td>

</tr>

<?php } ?>

</tbody>

</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

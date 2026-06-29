 <?php
include("../../cn.php");

$maestros = "SELECT * FROM tb_maestros";
?>

<div class="tabla-titulo">Datos de Maestros</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Especialidad</th>
<th>Correo</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$maestros);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Maestro'] ?></td>
<td><?= $row['Nombres'] ?></td>
<td><?= $row['Apellidos'] ?></td>
<td><?= $row['Especialidad'] ?></td>
<td><?= $row['Correo'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/maestros.php?id=<?= $row['ID_Maestro'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=maestros&id=<?= $row['ID_Maestro'] ?>"
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

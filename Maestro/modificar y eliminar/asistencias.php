 <?php
include("../../cn.php");

$asistencia = "SELECT * FROM tb_asistencia";
?>

<div class="tabla-titulo">Datos de Asistencia</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Estado</th>
<th>Observaciones</th>
<th>Estudiante</th>
<th>Maestro</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$asistencia);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Asistencia'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Estado'] ?></td>
<td><?= $row['Observaciones'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>
<td><?= $row['ID_Maestro'] ?></td>

<td>
<a class="button editar" href="../actualizar/asistencia.php?id=<?= $row['ID_Asistencia'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=asistencia&id=<?= $row['ID_Asistencia'] ?>"
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

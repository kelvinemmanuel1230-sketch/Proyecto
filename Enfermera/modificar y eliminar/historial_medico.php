 <?php
include("../../cn.php");

$historial = "SELECT * FROM tb_historial_medico";
?>

<div class="tabla-titulo">Historial Médico</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Diagnóstico</th>
<th>Tratamiento</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$historial);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Historial'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Diagnostico'] ?></td>
<td><?= $row['Tratamiento'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/historial.php?id=<?= $row['ID_Historial'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=historial&id=<?= $row['ID_Historial'] ?>"
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

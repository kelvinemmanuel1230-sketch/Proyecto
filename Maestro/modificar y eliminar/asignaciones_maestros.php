 <?php
include("../../cn.php");

$asignaciones = "SELECT * FROM tb_asignaciones_maestros";
?>

<div class="tabla-titulo">Datos de Asignaciones</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Año Escolar</th>
<th>Maestro</th>
<th>Materia</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$asignaciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Asignacion'] ?></td>
<td><?= $row['Fecha_Asignacion'] ?></td>
<td><?= $row['Ano_Escolar'] ?></td>
<td><?= $row['ID_Maestro'] ?></td>
<td><?= $row['ID_Materia'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/asignaciones_maestros.php?id=<?= $row['ID_Asignacion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=asignaciones_maestros&id=<?= $row['ID_Asignacion'] ?>"
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

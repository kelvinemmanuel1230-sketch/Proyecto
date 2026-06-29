 <?php
include("../../cn.php");

$deteccion = "SELECT * FROM tb_deteccion_necesidades";
?>

<div class="tabla-titulo">Datos de Detección de Necesidades</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Necesidad</th>
<th>Observaciones</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$deteccion);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Deteccion'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Necesidad'] ?></td>
<td><?= $row['Observaciones'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/deteccion_necesidades.php?id=<?= $row['ID_Deteccion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=deteccion_necesidades&id=<?= $row['ID_Deteccion'] ?>"
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

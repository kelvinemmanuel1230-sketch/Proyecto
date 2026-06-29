 <?php
include("../../cn.php");

$periodos = "SELECT * FROM tb_periodos_academicos";
?>

<div class="tabla-titulo">Datos de Períodos Académicos</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Período</th>
<th>Fecha Inicio</th>
<th>Fecha Fin</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$periodos);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Periodo'] ?></td>
<td><?= $row['Nombre_Periodo'] ?></td>
<td><?= $row['Fecha_Inicio'] ?></td>
<td><?= $row['Fecha_Fin'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/periodos_academicos.php?id=<?= $row['ID_Periodo'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=periodos_academicos&id=<?= $row['ID_Periodo'] ?>"
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

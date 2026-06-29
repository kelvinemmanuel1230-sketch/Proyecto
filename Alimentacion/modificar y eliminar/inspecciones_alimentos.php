 <?php
include("../../cn.php");

$inspecciones = "SELECT * FROM tb_inspecciones_alimentacion";
?>

<div class="tabla-titulo">Inspecciones de Alimentación</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Inspector</th>
<th>Resultado</th>
<th>Observaciones</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$inspecciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Inspeccion'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Inspector'] ?></td>
<td><?= $row['Resultado'] ?></td>
<td><?= $row['Observaciones'] ?></td>

<td>
<a class="button editar" href="../actualizar/inspecciones_alimentos.php?id=<?= $row['ID_Inspeccion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=inspecciones_alimentos&id=<?= $row['ID_Inspeccion'] ?>"
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

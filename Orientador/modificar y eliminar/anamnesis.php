 <?php
include("../../cn.php");

$anamnesis = "SELECT * FROM tb_anamnesis";
?>

<div class="tabla-titulo">Datos de Anamnesis</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Observaciones</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$anamnesis);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Anamnesis'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Observaciones'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/anamnesis.php?id=<?= $row['ID_Anamnesis'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=anamnesis&id=<?= $row['ID_Anamnesis'] ?>"
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

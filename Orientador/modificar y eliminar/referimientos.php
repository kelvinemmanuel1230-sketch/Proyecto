 <?php
include("../../cn.php");

$referimientos = "SELECT * FROM tb_referimientos";
?>

<div class="tabla-titulo">Datos de Referimientos</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Motivo</th>
<th>Descripción</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$referimientos);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Referimiento'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Motivo'] ?></td>
<td><?= $row['Descripcion'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/referimientos.php?id=<?= $row['ID_Referimiento'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=referimientos&id=<?= $row['ID_Referimiento'] ?>"
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

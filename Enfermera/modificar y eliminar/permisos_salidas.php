 <?php
include("../../cn.php");

$permisos = "SELECT * FROM tb_permisos_salida";
?>

<div class="tabla-titulo">Permisos de Salida</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Hora Salida</th>
<th>Hora Regreso</th>
<th>Motivo</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$permisos);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Permiso'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Hora_Salida'] ?></td>
<td><?= $row['Hora_Regreso'] ?></td>
<td><?= $row['Motivo'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/permisos_salidas.php?id=<?= $row['ID_Permiso'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=permisos_salidas&id=<?= $row['ID_Permiso'] ?>"
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

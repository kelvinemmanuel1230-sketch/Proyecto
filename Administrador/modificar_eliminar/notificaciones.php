 <?php
include("../../cn.php");

$notificaciones = "SELECT * FROM tb_notificaciones";
?>

<div class="tabla-titulo">Datos de Notificaciones</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Tipo</th>
<th>Fecha</th>
<th>Mensaje</th>
<th>Estado</th>
<th>Empleado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$notificaciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Notificacion'] ?></td>
<td><?= $row['Tipo'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Mensaje'] ?></td>
<td><?= $row['Estado'] ?></td>
<td><?= $row['ID_Empleado'] ?></td>

<td>
<a class="button editar" href="../actualizar/notificaciones.php?id=<?= $row['ID_Notificacion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=notificaciones&id=<?= $row['ID_Notificacion'] ?>"
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

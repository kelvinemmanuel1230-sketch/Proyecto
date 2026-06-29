 <?php
include("../../cn.php");

$calificaciones = "SELECT * FROM tb_calificaciones";
?>

<div class="tabla-titulo">Datos de Calificaciones</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Nota</th>
<th>Observaciones</th>
<th>Fecha</th>
<th>Estudiante</th>
<th>Asignación</th>
<th>Periodo</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$calificaciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Calificacion'] ?></td>
<td><?= $row['Nota'] ?></td>
<td><?= $row['Observaciones'] ?></td>
<td><?= $row['Fecha_Registro'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>
<td><?= $row['ID_Asignacion'] ?></td>
<td><?= $row['ID_Periodo'] ?></td>

<td>
<a class="button editar" href="../actualizar/calificaciones.php?id=<?= $row['ID_Calificacion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=calificaciones&id=<?= $row['ID_Calificacion'] ?>"
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

 <?php
include("../../cn.php");

$solicitudes = "SELECT * FROM tb_solicitudes_documentos";
?>

<div class="tabla-titulo">Datos de Solicitudes</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Documento</th>
<th>Motivo</th>
<th>Fecha</th>
<th>Estado</th>
<th>Estudiante</th>
<th>Empleado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$solicitudes);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Solicitud'] ?></td>
<td><?= $row['Tipo_Documento'] ?></td>
<td><?= $row['Motivo'] ?></td>
<td><?= $row['Fecha_Solicitud'] ?></td>
<td><?= $row['Estado'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>
<td><?= $row['ID_Empleado'] ?></td>

<td>
<a class="button editar" href="../actualizar/solicitudes_documentos.php?id=<?= $row['ID_Solicitud'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=solicitudes_documentos&id=<?= $row['ID_Solicitud'] ?>"
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

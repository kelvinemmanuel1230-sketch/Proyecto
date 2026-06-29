 <?php
include("../../cn.php");

$inscripciones = "SELECT * FROM tb_inscripciones";
?>

<div class="tabla-titulo">Datos de Inscripciones</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Tipo</th>
<th>Certificado</th>
<th>Fotos</th>
<th>Estado</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$inscripciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Inscripcion'] ?></td>
<td><?= $row['Fecha_Inscripcion'] ?></td>
<td><?= $row['Tipo'] ?></td>
<td><?= $row['Certificado_Medico'] ?></td>
<td><?= $row['Fotos'] ?></td>
<td><?= $row['Estado'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/inscripciones.php?id=<?= $row['ID_Inscripcion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=inscripciones&id=<?= $row['ID_Inscripcion'] ?>"
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

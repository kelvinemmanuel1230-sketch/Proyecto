 <?php
include("../../cn.php");

$reinscripciones = "SELECT * FROM tb_reinscripciones";
?>

<div class="tabla-titulo">Datos de Reinscripciones</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Periodo</th>
<th>Observaciones</th>
<th>Estado</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$reinscripciones);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Reinscripcion'] ?></td>
<td><?= $row['Fecha_Reinscripcion'] ?></td>
<td><?= $row['Periodo'] ?></td>
<td><?= $row['Observaciones'] ?></td>
<td><?= $row['Estado'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/reinscripciones.php?id=<?= $row['ID_Reinscripcion'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=reinscripciones&id=<?= $row['ID_Reinscripcion'] ?>"
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

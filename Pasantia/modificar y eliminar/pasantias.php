 <?php
include("../../cn.php");

$pasantias = "SELECT * FROM tb_pasantias";
?>

<div class="tabla-titulo">Pasantías</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha Inicio</th>
<th>Fecha Fin</th>
<th>Empresa</th>
<th>Estudiante</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$pasantias);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Pasantia'] ?></td>
<td><?= $row['Fecha_Inicio'] ?></td>
<td><?= $row['Fecha_Fin'] ?></td>
<td><?= $row['ID_Empresa'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/pasantias.php?id=<?= $row['ID_Pasantia'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=pasantias&id=<?= $row['ID_Pasantia'] ?>"
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

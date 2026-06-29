 <?php
include("../../cn.php");

$estudiantes = "SELECT * FROM tb_estudiantes";
?>

<div class="tabla-titulo">Datos de Estudiantes</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Matrícula</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Sexo</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$estudiantes);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Estudiante'] ?></td>
<td><?= $row['Matricula'] ?></td>
<td><?= $row['Nombres'] ?></td>
<td><?= $row['Apellidos'] ?></td>
<td><?= $row['Sexo'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/estudiantes.php?id=<?= $row['ID_Estudiante'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=estudiantes&id=<?= $row['ID_Estudiante'] ?>"
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

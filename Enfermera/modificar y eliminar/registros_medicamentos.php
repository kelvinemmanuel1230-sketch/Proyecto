 <?php
include("../../cn.php");

$medicamentos = "SELECT * FROM tb_registro_medicamentos";
?>

<div class="tabla-titulo">Registro de Medicamentos</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Medicamento</th>
<th>Dosis</th>
<th>Fecha</th>
<th>Estudiante</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$medicamentos);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Registro'] ?></td>
<td><?= $row['Medicamento'] ?></td>
<td><?= $row['Dosis'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['ID_Estudiante'] ?></td>

<td>
<a class="button editar" href="../actualizar/registros_medicamentos.php?id=<?= $row['ID_Registro'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=registros_medicamentos&id=<?= $row['ID_Registro'] ?>"
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

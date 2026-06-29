 <?php
include("../../cn.php");

$empleados = "SELECT * FROM tb_empleados";
?>

<div class="tabla-titulo">Datos de Empleados</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Cédula</th>
<th>Teléfono</th>
<th>Correo</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$empleados);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Empleado'] ?></td>
<td><?= $row['Nombres'] ?></td>
<td><?= $row['Apellidos'] ?></td>
<td><?= $row['Cedula'] ?></td>
<td><?= $row['Telefono'] ?></td>
<td><?= $row['Correo'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/empleados.php?id=<?= $row['ID_Empleado'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=empleados&id=<?= $row['ID_Empleado'] ?>"
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

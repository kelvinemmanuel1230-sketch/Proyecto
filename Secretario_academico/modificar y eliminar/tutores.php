 <?php
include("../../cn.php");

$tutores = "SELECT * FROM tb_tutores";
?>

<div class="tabla-titulo">Datos de Tutores</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Parentesco</th>
<th>Teléfono</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$tutores);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Tutor'] ?></td>
<td><?= $row['Nombres'] ?></td>
<td><?= $row['Apellidos'] ?></td>
<td><?= $row['Parentesco'] ?></td>
<td><?= $row['Telefono'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/tutores.php?id=<?= $row['ID_Tutor'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=tutores&id=<?= $row['ID_Tutor'] ?>"
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

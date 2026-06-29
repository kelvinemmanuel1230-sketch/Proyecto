 <?php
include("../../cn.php");

$inventario = "SELECT * FROM tb_inventario";
?>

<div class="tabla-titulo">Inventario</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Unidad</th>
<th>Fecha Registro</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$inventario);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Item'] ?></td>
<td><?= $row['Producto'] ?></td>
<td><?= $row['Cantidad'] ?></td>
<td><?= $row['Unidad'] ?></td>
<td><?= $row['Fecha_Registro'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/inventario.php?id=<?= $row['ID_Item'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=inventario&id=<?= $row['ID_Item'] ?>"
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

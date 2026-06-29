 <?php
include("../../cn.php");

$entregas = "SELECT * FROM tb_entregas_alimentos";
?>

<div class="tabla-titulo">Entregas de Alimentos</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Responsable</th>
<th>Observaciones</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$entregas);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Entrega'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Producto'] ?></td>
<td><?= $row['Cantidad'] ?></td>
<td><?= $row['Responsable'] ?></td>
<td><?= $row['Observaciones'] ?></td>

<td>
<a class="button editar" href="../actualizar/entregas_alimentos.php?id=<?= $row['ID_Entrega'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=entregas_alimentos&id=<?= $row['ID_Entrega'] ?>"
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

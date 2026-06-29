 <?php
include("../../cn.php");

$menu = "SELECT * FROM tb_menu_diario";
?>

<div class="tabla-titulo">Menú Diario</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>Desayuno</th>
<th>Almuerzo</th>
<th>Merienda</th>
<th>Observaciones</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$menu);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Menu'] ?></td>
<td><?= $row['Fecha'] ?></td>
<td><?= $row['Desayuno'] ?></td>
<td><?= $row['Almuerzo'] ?></td>
<td><?= $row['Merienda'] ?></td>
<td><?= $row['Observaciones'] ?></td>

<td>
<a class="button editar" href="../actualizar/menu.php?id=<?= $row['ID_Menu'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=menu&id=<?= $row['ID_Menu'] ?>"
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

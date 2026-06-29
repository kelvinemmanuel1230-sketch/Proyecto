 <?php
include("../../cn.php");

$empresas = "SELECT * FROM tb_empresas_pasantias";
?>

<div class="tabla-titulo">Datos de Empresas</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">

<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Teléfono</th>
<th>Correo</th>
<th>Contacto</th>
<th>Estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php
$resultados = mysqli_query($cn,$empresas);

while($row=mysqli_fetch_assoc($resultados)){
?>

<tr>

<td><?= $row['ID_Empresa'] ?></td>
<td><?= $row['Nombre'] ?></td>
<td><?= $row['Telefono'] ?></td>
<td><?= $row['Correo'] ?></td>
<td><?= $row['Contacto'] ?></td>
<td><?= $row['Estado'] ?></td>

<td>
<a class="button editar" href="../actualizar/empresas_pasantias.php?id=<?= $row['ID_Empresa'] ?>">
Editar
</a>
</td>

<td>
<a class="button eliminar" href="../../eli.php?tabla=empresas_pasantias&id=<?= $row['ID_Empresa'] ?>"
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

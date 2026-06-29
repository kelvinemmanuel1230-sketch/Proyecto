<?php
include("../../cn.php");

$inventario = "SELECT * FROM tb_inventario";
?>

<div class="tabla-titulo">
    Datos de Inventario
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Item</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Código MINERD</th>
            <th>Fecha Registro</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$inventario);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Item']; ?></td>
            <td><?php echo $row['Nombre_Item']; ?></td>
            <td><?php echo $row['Tipo']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['Codigo_MINERD']; ?></td>
            <td><?php echo $row['Fecha_Registro']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

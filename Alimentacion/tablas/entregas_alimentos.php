<?php
include("../../cn.php");

$entregas = "SELECT * FROM tb_entregas_alimentos";
?>

<div class="tabla-titulo">
    Datos de Entregas de Alimentos
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Proveedor</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Unidad Medida</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$entregas);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Entrega']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Proveedor']; ?></td>
            <td><?php echo $row['Producto']; ?></td>
            <td><?php echo $row['Cantidad']; ?></td>
            <td><?php echo $row['Unidad_Medida']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

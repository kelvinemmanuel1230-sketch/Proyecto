<?php
include("../../cn.php");

$notificaciones = "SELECT * FROM tb_notificaciones";
?>

<div class="tabla-titulo">
    Datos de Notificaciones
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Mensaje</th>
            <th>Estado</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$notificaciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Notificacion']; ?></td>
            <td><?php echo $row['Tipo']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Mensaje']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

<?php
include("../../cn.php");

$referimientos = "SELECT * FROM tb_referimientos";
?>

<div class="tabla-titulo">
    Datos de Referimientos
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Motivo</th>
            <th>Fecha</th>
            <th>Descripción</th>
            <th>Seguimiento</th>
            <th>Estado</th>
            <th>ID Estudiante</th>
            <th>ID Maestro</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$referimientos);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Referimiento']; ?></td>
            <td><?php echo $row['Motivo']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Seguimiento']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Maestro']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

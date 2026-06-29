<?php
include("../../cn.php");

$periodos = "SELECT * FROM tb_periodos_academicos";
?>

<div class="tabla-titulo">
    Datos de Períodos Académicos
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Período</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$periodos);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Periodo']; ?></td>
            <td><?php echo $row['Nombre_Periodo']; ?></td>
            <td><?php echo $row['Fecha_Inicio']; ?></td>
            <td><?php echo $row['Fecha_Fin']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

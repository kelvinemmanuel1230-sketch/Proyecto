<?php
include("../../cn.php");

$inspecciones = "SELECT * FROM tb_inspecciones_alimentacion";
?>

<div class="tabla-titulo">
    Datos de Inspecciones de Alimentación
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Inspector</th>
            <th>Resultado</th>
            <th>Observaciones</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$inspecciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Inspeccion']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Inspector']; ?></td>
            <td><?php echo $row['Resultado']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

<?php
include("../../cn.php");

$solicitudes = "SELECT * FROM tb_solicitudes_documentos";
?>

<div class="tabla-titulo">
    Datos de Solicitudes de Documentos
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo Documento</th>
            <th>Motivo</th>
            <th>Fecha Solicitud</th>
            <th>Estado</th>
            <th>ID Estudiante</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$solicitudes);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Solicitud']; ?></td>
            <td><?php echo $row['Tipo_Documento']; ?></td>
            <td><?php echo $row['Motivo']; ?></td>
            <td><?php echo $row['Fecha_Solicitud']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

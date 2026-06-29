<?php
include("../../cn.php");

$medicamentos = "SELECT * FROM tb_registro_medicamentos";
?>

<div class="tabla-titulo">
    Datos de Registro de Medicamentos
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Medicamento</th>
            <th>Dosis</th>
            <th>Fecha</th>
            <th>Responsable</th>
            <th>Motivo</th>
            <th>ID Estudiante</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$medicamentos);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Registro']; ?></td>
            <td><?php echo $row['Medicamento']; ?></td>
            <td><?php echo $row['Dosis']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Responsable']; ?></td>
            <td><?php echo $row['Motivo']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

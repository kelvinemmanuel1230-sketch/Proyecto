<?php
include("../../cn.php");

$historial = "SELECT * FROM tb_historial_medico";
?>

<div class="tabla-titulo">
    Datos de Historial Médico
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alergias</th>
            <th>Enfermedades</th>
            <th>Tipo Sangre</th>
            <th>Observaciones</th>
            <th>ID Estudiante</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$historial);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Historial']; ?></td>
            <td><?php echo $row['Alergias']; ?></td>
            <td><?php echo $row['Enfermedades']; ?></td>
            <td><?php echo $row['Tipo_Sangre']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

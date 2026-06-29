<?php
include("../../cn.php");

$asistencia = "SELECT * FROM tb_asistencia";
?>

<div class="tabla-titulo">
    Datos de Asistencia
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Observaciones</th>
            <th>ID Estudiante</th>
            <th>ID Maestro</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$asistencia);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Asistencia']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Maestro']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

<?php
include("../../cn.php");
$calificaciones = "SELECT * FROM tb_calificaciones";
?>

<div class="tabla-titulo">
    Datos de Calificaciones
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nota</th>
            <th>Observaciones</th>
            <th>Fecha Registro</th>
            <th>ID Estudiante</th>
            <th>ID Asignación</th>
            <th>ID Período</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$calificaciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Calificacion']; ?></td>
            <td><?php echo $row['Nota']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><?php echo $row['Fecha_Registro']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Asignacion']; ?></td>
            <td><?php echo $row['ID_Periodo']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

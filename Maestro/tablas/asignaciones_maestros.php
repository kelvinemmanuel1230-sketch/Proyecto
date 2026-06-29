<?php
include("../../cn.php");

$asignaciones = "SELECT * FROM tb_asignaciones_maestros";
?>

<div class="tabla-titulo">
    Datos de Asignaciones de Maestros
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Asignación</th>
            <th>Año Escolar</th>
            <th>Estado</th>
            <th>ID Maestro</th>
            <th>ID Materia</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$asignaciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Asignacion']; ?></td>
            <td><?php echo $row['Fecha_Asignacion']; ?></td>
            <td><?php echo $row['Ano_Escolar']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Maestro']; ?></td>
            <td><?php echo $row['ID_Materia']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

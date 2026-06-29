<?php
include("../../cn.php");

$deteccion = "SELECT * FROM tb_deteccion_necesidades";
?>

<div class="tabla-titulo">
    Datos de Detección de Necesidades
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ámbito Cognoscitivo</th>
            <th>Ámbito Psicomotor</th>
            <th>Ámbito Psicosocial</th>
            <th>Observaciones</th>
            <th>ID Estudiante</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$deteccion);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Deteccion']; ?></td>
            <td><?php echo $row['Ambito_Cognoscitivo']; ?></td>
            <td><?php echo $row['Ambito_Psicomotor']; ?></td>
            <td><?php echo $row['Ambito_Psicosocial']; ?></td>
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

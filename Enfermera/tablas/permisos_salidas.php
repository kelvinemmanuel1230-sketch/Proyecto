<?php
include("../../cn.php");

$permisos = "SELECT * FROM tb_permisos_salida";
?>

<div class="tabla-titulo">
    Datos de Permisos de Salida
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Motivo</th>
            <th>Autorizado Por</th>
            <th>Observaciones</th>
            <th>ID Estudiante</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$permisos);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Permiso']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Motivo']; ?></td>
            <td><?php echo $row['Autorizado_Por']; ?></td>
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

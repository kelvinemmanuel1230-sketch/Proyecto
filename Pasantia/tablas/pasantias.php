<?php
include("../../cn.php");

$pasantias = "SELECT * FROM tb_pasantias";
?>

<div class="tabla-titulo">
    Datos de Pasantías
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Área</th>
            <th>Actividades</th>
            <th>Habilidades</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
            <th>ID Estudiante</th>
            <th>ID Empresa</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$pasantias);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Pasantia']; ?></td>
            <td><?php echo $row['Area']; ?></td>
            <td><?php echo $row['Actividades']; ?></td>
            <td><?php echo $row['Habilidades_Desarrolladas']; ?></td>
            <td><?php echo $row['Fecha_Inicio']; ?></td>
            <td><?php echo $row['Fecha_Fin']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['ID_Empresa']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

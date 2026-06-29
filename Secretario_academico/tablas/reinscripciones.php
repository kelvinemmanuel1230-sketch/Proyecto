<?php
include("../../cn.php");

$reinscripciones = "SELECT * FROM tb_reinscripciones";
?>

<div class="tabla-titulo">
    Datos de Reinscripciones
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Reinscripción</th>
            <th>Periodo</th>
            <th>Observaciones</th>
            <th>Estado</th>
            <th>ID Estudiante</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$reinscripciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Reinscripcion']; ?></td>
            <td><?php echo $row['Fecha_Reinscripcion']; ?></td>
            <td><?php echo $row['Periodo']; ?></td>
            <td><?php echo $row['Observaciones']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

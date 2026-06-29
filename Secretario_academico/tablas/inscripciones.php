

<?php
include("../../cn.php");

$inscripciones = "SELECT * FROM tb_inscripciones";
?>

<div class="tabla-titulo">
    Datos de Inscripciones
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha Inscripción</th>
            <th>Tipo</th>
            <th>Certificado Médico</th>
            <th>Fotos</th>
            <th>Estado</th>
            <th>ID Estudiante</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$inscripciones);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Inscripcion']; ?></td>
            <td><?php echo $row['Fecha_Inscripcion']; ?></td>
            <td><?php echo $row['Tipo']; ?></td>
            <td><?php echo $row['Certificado_Medico']; ?></td>
            <td><?php echo $row['Fotos']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Estudiante']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

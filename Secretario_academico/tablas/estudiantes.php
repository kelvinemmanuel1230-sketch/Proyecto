<?php
include("../../cn.php");

$estudiantes = "SELECT * FROM tb_estudiantes";
?>

<div class="tabla-titulo">
    Datos de Estudiantes
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Matrícula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>Sexo</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th>ID Tutor</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$estudiantes);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Estudiante']; ?></td>
            <td><?php echo $row['Matricula']; ?></td>
            <td><?php echo $row['Nombres']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Fecha_Nacimiento']; ?></td>
            <td><?php echo $row['Sexo']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Fecha_Ingreso']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Tutor']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

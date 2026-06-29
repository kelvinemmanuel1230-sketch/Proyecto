<?php
include("../../cn.php");

$tutores = "SELECT * FROM tb_tutores";
?>

<div class="tabla-titulo">
    Datos de Tutores
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Parentesco</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$tutores);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Tutor']; ?></td>
            <td><?php echo $row['Nombres']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Parentesco']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

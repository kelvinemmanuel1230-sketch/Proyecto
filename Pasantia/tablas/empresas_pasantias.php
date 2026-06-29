<?php
include("../../cn.php");

$empresas = "SELECT * FROM tb_empresas_pasantias";
?>

<div class="tabla-titulo">
    Datos de Empresas de Pasantías
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Contacto</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$empresas);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Empresa']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Contacto']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

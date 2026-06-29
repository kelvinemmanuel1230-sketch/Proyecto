<?php
include("../../cn.php");

$maestros = "SELECT * FROM tb_maestros";
?>

<div class="tabla-titulo">
    Datos de Maestros
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Especialidad</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th>ID Usuario</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$maestros);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Maestro']; ?></td>
            <td><?php echo $row['Nombres']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Especialidad']; ?></td>
            <td><?php echo $row['Fecha_Ingreso']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['ID_Usuario']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

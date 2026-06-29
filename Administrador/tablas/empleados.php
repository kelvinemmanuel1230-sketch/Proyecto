<?php
include("../../cn.php");

$empleados = "SELECT * FROM tb_empleados";
?>

<div class="tabla-titulo">
    Datos de Empleados
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th>ID Usuario</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$empleados);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Empleado']; ?></td>
            <td><?php echo $row['Nombres']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Cedula']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Correo']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
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

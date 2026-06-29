<?php
include("../../cn.php");

$roles = "SELECT * FROM tb_roles";
?>

<div class="tabla-titulo">
    Datos de Roles
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Rol</th>
            <th>Descripción</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$roles);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Rol']; ?></td>
            <td><?php echo $row['Nombre_Rol']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

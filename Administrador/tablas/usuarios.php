<?php
include("../../cn.php");

$usuarios = "SELECT * FROM tb_usuarios";
?>

<div class="tabla-titulo">
    Datos de Usuarios
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>ID Rol</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$usuarios);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Usuario']; ?></td>
            <td><?php echo $row['Usuario']; ?></td>
            <td><?php echo $row['Clave']; ?></td>
            <td><?php echo $row['ID_Rol']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

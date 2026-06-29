<?php
include("../../cn.php");

$materias = "SELECT * FROM tb_materias";
?>

<div class="tabla-titulo">
    Datos de Materias
</div>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Materia</th>
            <th>Descripción</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$materias);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Materia']; ?></td>
            <td><?php echo $row['Nombre_Materia']; ?></td>
            <td><?php echo $row['Descripcion']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

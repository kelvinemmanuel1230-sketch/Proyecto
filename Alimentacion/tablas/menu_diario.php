<?php
include("../../cn.php");

$menu = "SELECT * FROM tb_menu_diario";
?>

<div class="tabla-titulo">
    Datos de Menú Diario
</div>
<link rel="stylesheet" href="../../css/style.css">
<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Desayuno</th>
            <th>Almuerzo</th>
            <th>Merienda</th>
            <th>ID Empleado</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $resultados = mysqli_query($cn,$menu);
    while($row = mysqli_fetch_assoc($resultados)){
    ?>
        <tr>
            <td><?php echo $row['ID_Menu']; ?></td>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Desayuno']; ?></td>
            <td><?php echo $row['Almuerzo']; ?></td>
            <td><?php echo $row['Merienda']; ?></td>
            <td><?php echo $row['ID_Empleado']; ?></td>
        </tr>
    <?php } mysqli_free_result($resultados); ?>
    </tbody>
</table>
<div class="formulario-acciones">
<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>

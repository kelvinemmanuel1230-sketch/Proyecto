 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" required>
</div>
<div class="campo">
<label>Desayuno</label>
<input type="text" name="Desayuno" required>
</div>
<div class="campo">
<label>Almuerzo</label>
<input type="text" name="Almuerzo" required>
</div>
<div class="campo">
<label>Merienda</label>
<input type="text" name="Merienda" required>
</div>
<div class="campo">
<label>ID Empleado</label>
<input type="number" name="ID_Empleado" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
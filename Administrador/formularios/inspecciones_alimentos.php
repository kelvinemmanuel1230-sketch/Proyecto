<form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" required>
</div>
<div class="campo">
<label>Inspector</label>
<input type="text" name="Inspector" required>
</div>
<div class="campo">
<label>Resultado</label>
<input type="text" name="Resultado" required>
</div>
<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones">
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
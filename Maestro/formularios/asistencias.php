 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Fecha</label>
<input type="date" name="Fecha" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones">
</div>
<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" required>
</div>
<div class="campo">
<label>ID Maestro</label>
<input type="number" name="ID_Maestro" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Nota</label>
<input type="number" step="0.01" name="Nota" required>
</div>
<div class="campo">
<label>Observaciones</label>
<input type="text" name="Observaciones">
</div>
<div class="campo">
<label>Fecha Registro</label>
<input type="date" name="Fecha_Registro" required>
</div>
<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" required>
</div>
<div class="campo">
<label>ID Asignación</label>
<input type="number" name="ID_Asignacion" required>
</div>
<div class="campo">
<label>ID Período</label>
<input type="number" name="ID_Periodo" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
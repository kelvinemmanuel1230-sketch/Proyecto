 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Fecha Asignación</label>
<input type="date" name="Fecha_Asignacion" required>
</div>
<div class="campo">
<label>Año Escolar</label>
<input type="text" name="Ano_Escolar" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="campo">
<label>ID Maestro</label>
<input type="number" name="ID_Maestro" required>
</div>
<div class="campo">
<label>ID Materia</label>
<input type="number" name="ID_Materia" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
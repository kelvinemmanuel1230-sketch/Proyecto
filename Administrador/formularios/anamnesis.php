<link rel="stylesheet" href="../../css/style.css">

<form class="formulario" action="../../../insertar.php" method="POST">

<div class="campo">
<label>Historia Prenatal</label>
<input type="text" name="Historia_Prenatal">
</div>
<div class="campo">
<label>Salud</label>
<input type="text" name="Salud">
</div>
<div class="campo">
<label>Conducta</label>
<input type="text" name="Conducta">
</div>
<div class="campo">
<label>Familia</label>
<input type="text" name="Familia">
</div>
<div class="campo">
<label>Escuela</label>
<input type="text" name="Escuela">
</div>
<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" required>
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
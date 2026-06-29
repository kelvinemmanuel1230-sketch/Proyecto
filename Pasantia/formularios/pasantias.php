 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Área</label>
<input type="text" name="Area" required>
</div>
<div class="campo">
<label>Actividades</label>
<input type="text" name="Actividades" required>
</div>
<div class="campo">
<label>Habilidades Desarrolladas</label>
<input type="text" name="Habilidades_Desarrolladas">
</div>
<div class="campo">
<label>Fecha Inicio</label>
<input type="date" name="Fecha_Inicio" required>
</div>
<div class="campo">
<label>Fecha Fin</label>
<input type="date" name="Fecha_Fin" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" required>
</div>
<div class="campo">
<label>ID Empresa</label>
<input type="number" name="ID_Empresa" required>
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
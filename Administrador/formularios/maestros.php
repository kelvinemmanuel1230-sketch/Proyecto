 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Nombres</label>
<input type="text" name="Nombres" required>
</div>
<div class="campo">
<label>Apellidos</label>
<input type="text" name="Apellidos" required>
</div>
<div class="campo">
<label>Cédula</label>
<input type="text" name="Cedula" required>
</div>
<div class="campo">
<label>Teléfono</label>
<input type="text" name="Telefono" required>
</div>
<div class="campo">
<label>Correo</label>
<input type="email" name="Correo">
</div>
<div class="campo">
<label>Especialidad</label>
<input type="text" name="Especialidad" required>
</div>
<div class="campo">
<label>Fecha Ingreso</label>
<input type="date" name="Fecha_Ingreso" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="campo">
<label>ID Usuario</label>
<input type="number" name="ID_Usuario" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
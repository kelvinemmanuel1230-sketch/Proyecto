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
<label>Parentesco</label>
<input type="text" name="Parentesco" required>
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
<label>Dirección</label>
<input type="text" name="Direccion" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
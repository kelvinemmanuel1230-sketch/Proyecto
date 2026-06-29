 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Nombre</label>
<input type="text" name="Nombre" required>
</div>
<div class="campo">
<label>Dirección</label>
<input type="text" name="Direccion" required>
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
<label>Contacto</label>
<input type="text" name="Contacto" required>
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
 <form class="formulario" action="../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Nombre Rol</label>
<input type="text" name="Nombre_Rol" required>
</div>
<div class="campo">
<label>Descripción</label>
<input type="text" name="Descripcion" required>
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
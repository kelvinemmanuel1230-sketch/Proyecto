 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Nombre Artículo</label>
<input type="text" name="Nombre_Articulo" required>
</div>
<div class="campo">
<label>Categoría</label>
<input type="text" name="Categoria" required>
</div>
<div class="campo">
<label>Cantidad</label>
<input type="number" name="Cantidad" required>
</div>
<div class="campo">
<label>Fecha Registro</label>
<input type="date" name="Fecha_Registro" required>
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
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
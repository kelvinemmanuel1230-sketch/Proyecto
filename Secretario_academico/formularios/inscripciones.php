 <form class="formulario" action="../../../insertar.php" method="POST">
<link rel="stylesheet" href="../../css/style.css">
<div class="campo">
<label>Fecha Inscripción</label>
<input type="date" name="Fecha_Inscripcion" required>
</div>
<div class="campo">
<label>Tipo</label>
<input type="text" name="Tipo" required>
</div>
<div class="campo">
<label>Certificado Médico</label>
<input type="text" name="Certificado_Medico">
</div>
<div class="campo">
<label>Fotos</label>
<input type="text" name="Fotos">
</div>
<div class="campo">
<label>Estado</label>
<input type="text" name="Estado" required>
</div>
<div class="campo">
<label>ID Estudiante</label>
<input type="number" name="ID_Estudiante" required>
</div>
<div class="formulario-acciones">
<button class="button" type="submit">Guardar</button>
<button class="button secundario" type="reset">Limpiar</button>

<button onclick="window.history.back()" class="button secundario">Volver</button>
</div>
</form>
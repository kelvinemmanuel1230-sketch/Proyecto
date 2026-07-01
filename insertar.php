<?php
include("cn.php");

/* ===================== tb_roles ===================== */
if(isset($_POST['Nombre_Rol'])){

$Nombre_Rol = $_POST['Nombre_Rol'];
$Descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_roles
(Nombre_Rol, Descripcion, Estado)
VALUES
('$Nombre_Rol','$Descripcion','$Estado')";

echo (mysqli_query($cn,$sql))
? "Rol registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_usuarios ===================== */
if(isset($_POST['Usuario'])){

$Usuario = $_POST['Usuario'];
$Clave = $_POST['Clave'];
$Estado = $_POST['Estado'];
$ID_Rol = $_POST['ID_Rol'];

$sql = "INSERT INTO tb_usuarios
(Usuario, Clave, Estado, ID_Rol)
VALUES
('$Usuario','$Clave','$Estado','$ID_Rol')";

echo (mysqli_query($cn,$sql))
? "Usuario registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_empleados ===================== */
if(isset($_POST['Cedula']) && isset($_POST['Fecha_Ingreso']) && isset($_POST['Direccion'])){

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Cedula = $_POST['Cedula'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Direccion = $_POST['Direccion'];
$Fecha_Ingreso = $_POST['Fecha_Ingreso'];
$Estado = $_POST['Estado'];
$ID_Usuario = $_POST['ID_Usuario'];

$sql = "INSERT INTO tb_empleados
(Nombres,Apellidos,Cedula,Telefono,Correo,Direccion,Fecha_Ingreso,Estado,ID_Usuario)
VALUES
('$Nombres','$Apellidos','$Cedula','$Telefono','$Correo','$Direccion','$Fecha_Ingreso','$Estado','$ID_Usuario')";

echo (mysqli_query($cn,$sql))
? "Empleado registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_maestros ===================== */
if(isset($_POST['Especialidad'])){

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Cedula = $_POST['Cedula'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Especialidad = $_POST['Especialidad'];
$Fecha_Ingreso = $_POST['Fecha_Ingreso'];
$Estado = $_POST['Estado'];
$ID_Usuario = $_POST['ID_Usuario'];

$sql = "INSERT INTO tb_maestros
(Nombres,Apellidos,Cedula,Telefono,Correo,Especialidad,Fecha_Ingreso,Estado,ID_Usuario)
VALUES
('$Nombres','$Apellidos','$Cedula','$Telefono','$Correo','$Especialidad','$Fecha_Ingreso','$Estado','$ID_Usuario')";

echo (mysqli_query($cn,$sql))
? "Maestro registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_tutores ===================== */
if(isset($_POST['Parentesco'])){

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Cedula = $_POST['Cedula'];
$Parentesco = $_POST['Parentesco'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Direccion = $_POST['Direccion'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_tutores
(Nombres,Apellidos,Cedula,Parentesco,Telefono,Correo,Direccion,Estado)
VALUES
('$Nombres','$Apellidos','$Cedula','$Parentesco','$Telefono','$Correo','$Direccion','$Estado')";

echo (mysqli_query($cn,$sql))
? "Tutor registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_estudiantes ===================== */
if(isset($_POST['Matricula'])){

$Matricula = $_POST['Matricula'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Fecha_Nacimiento = $_POST['Fecha_Nacimiento'];
$Sexo = $_POST['Sexo'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Fecha_Ingreso = $_POST['Fecha_Ingreso'];
$Estado = $_POST['Estado'];
$ID_Tutor = $_POST['ID_Tutor'];

$sql = "INSERT INTO tb_estudiantes
(Matricula,Nombres,Apellidos,Fecha_Nacimiento,Sexo,Direccion,Telefono,Correo,Fecha_Ingreso,Estado,ID_Tutor)
VALUES
('$Matricula','$Nombres','$Apellidos','$Fecha_Nacimiento','$Sexo','$Direccion','$Telefono','$Correo','$Fecha_Ingreso','$Estado','$ID_Tutor')";

echo (mysqli_query($cn,$sql))
? "Estudiante registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_materias ===================== */
if(isset($_POST['Nombre_Materia'])){

$Nombre_Materia = $_POST['Nombre_Materia'];
$Descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_materias
(Nombre_Materia,Descripcion,Estado)
VALUES
('$Nombre_Materia','$Descripcion','$Estado')";

echo (mysqli_query($cn,$sql))
? "Materia registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_periodos_academicos ===================== */
if(isset($_POST['Nombre_Periodo'])){

$Nombre_Periodo = $_POST['Nombre_Periodo'];
$Fecha_Inicio = $_POST['Fecha_Inicio'];
$Fecha_Fin = $_POST['Fecha_Fin'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_periodos_academicos
(Nombre_Periodo,Fecha_Inicio,Fecha_Fin,Estado)
VALUES
('$Nombre_Periodo','$Fecha_Inicio','$Fecha_Fin','$Estado')";

echo (mysqli_query($cn,$sql))
? "Periodo registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_empresas_pasantias ===================== */
if(isset($_POST['Contacto'])){

$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Contacto = $_POST['Contacto'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_empresas_pasantias
(Nombre,Direccion,Telefono,Correo,Contacto,Estado)
VALUES
('$Nombre','$Direccion','$Telefono','$Correo','$Contacto','$Estado')";

echo (mysqli_query($conexion,$sql))
? "Empresa registrada correctamente"
: mysqli_error($cn);

}

/* ===================== tb_asignaciones_maestros ===================== */
if(isset($_POST['ID_Maestro']) && isset($_POST['ID_Materia'])){

$Fecha_Asignacion = $_POST['Fecha_Asignacion'];
$Ano_Escolar = $_POST['Ano_Escolar'];
$Estado = $_POST['Estado'];
$ID_Maestro = $_POST['ID_Maestro'];
$ID_Materia = $_POST['ID_Materia'];

$sql = "INSERT INTO tb_asignaciones_maestros
(Fecha_Asignacion,Ano_Escolar,Estado,ID_Maestro,ID_Materia)
VALUES
('$Fecha_Asignacion','$Ano_Escolar','$Estado','$ID_Maestro','$ID_Materia')";

echo (mysqli_query($conexion,$sql))
? "Asignación registrada correctamente"
: mysqli_error($cn);

}

/* ===================== tb_asistencia ===================== */
if(isset($_POST['ID_Estudiante']) && isset($_POST['ID_Maestro'])){

$Fecha = $_POST['Fecha'];
$Estado = $_POST['Estado'];
$Observaciones = $_POST['Observaciones'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Maestro = $_POST['ID_Maestro'];

$sql = "INSERT INTO tb_asistencia
(Fecha,Estado,Observaciones,ID_Estudiante,ID_Maestro)
VALUES
('$Fecha','$Estado','$Observaciones','$ID_Estudiante','$ID_Maestro')";

echo (mysqli_query($cn,$sql))
? "Asistencia registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_calificaciones ===================== */
if(isset($_POST['Nota'])){

$Nota = $_POST['Nota'];
$Observaciones = $_POST['Observaciones'];
$Fecha_Registro = $_POST['Fecha_Registro'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Asignacion = $_POST['ID_Asignacion'];
$ID_Periodo = $_POST['ID_Periodo'];

$sql = "INSERT INTO tb_calificaciones
(Nota,Observaciones,Fecha_Registro,ID_Estudiante,ID_Asignacion,ID_Periodo)
VALUES
('$Nota','$Observaciones','$Fecha_Registro','$ID_Estudiante','$ID_Asignacion','$ID_Periodo')";

echo (mysqli_query($cn,$sql))
? "Calificación registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_inscripciones ===================== */
if(isset($_POST['Fecha_Inscripcion'])){

$Fecha_Inscripcion = $_POST['Fecha_Inscripcion'];
$Tipo = $_POST['Tipo'];
$Certificado_Medico = $_POST['Certificado_Medico'];
$Fotos = $_POST['Fotos'];
$Estado = $_POST['Estado'];
$ID_Estudiante = $_POST['ID_Estudiante'];

$sql = "INSERT INTO tb_inscripciones
(Fecha_Inscripcion,Tipo,Certificado_Medico,Fotos,Estado,ID_Estudiante)
VALUES
('$Fecha_Inscripcion','$Tipo','$Certificado_Medico','$Fotos','$Estado','$ID_Estudiante')";

echo (mysqli_query($cn,$sql))
? "Inscripción registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_reinscripciones ===================== */
if(isset($_POST['Fecha_Reinscripcion'])){

$Fecha_Reinscripcion = $_POST['Fecha_Reinscripcion'];
$Periodo = $_POST['Periodo'];
$Observaciones = $_POST['Observaciones'];
$Estado = $_POST['Estado'];
$ID_Estudiante = $_POST['ID_Estudiante'];

$sql = "INSERT INTO tb_reinscripciones
(Fecha_Reinscripcion,Periodo,Observaciones,Estado,ID_Estudiante)
VALUES
('$Fecha_Reinscripcion','$Periodo','$Observaciones','$Estado','$ID_Estudiante')";

echo (mysqli_query($cn,$sql))
? "Reinscripción registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_notificaciones ===================== */
if(isset($_POST['Mensaje'])){

$Tipo = $_POST['Tipo'];
$Fecha = $_POST['Fecha'];
$Mensaje = $_POST['Mensaje'];
$Estado = $_POST['Estado'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_notificaciones
(Tipo,Fecha,Mensaje,Estado,ID_Empleado)
VALUES
('$Tipo','$Fecha','$Mensaje','$Estado','$ID_Empleado')";

echo (mysqli_query($conexion,$sql))
? "Notificación registrada correctamente"
: mysqli_error($cn);

}

/* ===================== tb_solicitudes_documentos ===================== */
if(isset($_POST['Tipo_Documento'])){

$Tipo_Documento = $_POST['Tipo_Documento'];
$Motivo = $_POST['Motivo'];
$Fecha_Solicitud = $_POST['Fecha_Solicitud'];
$Estado = $_POST['Estado'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_solicitudes_documentos
(Tipo_Documento,Motivo,Fecha_Solicitud,Estado,ID_Estudiante,ID_Empleado)
VALUES
('$Tipo_Documento','$Motivo','$Fecha_Solicitud','$Estado','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Solicitud registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_referimientos ===================== */
if(isset($_POST['Seguimiento'])){

$Motivo = $_POST['Motivo'];
$Fecha = $_POST['Fecha'];
$Descripcion = $_POST['Descripcion'];
$Seguimiento = $_POST['Seguimiento'];
$Estado = $_POST['Estado'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Maestro = $_POST['ID_Maestro'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_referimientos
(Motivo,Fecha,Descripcion,Seguimiento,Estado,ID_Estudiante,ID_Maestro,ID_Empleado)
VALUES
('$Motivo','$Fecha','$Descripcion','$Seguimiento','$Estado','$ID_Estudiante','$ID_Maestro','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Referimiento registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_anamnesis ===================== */
if(isset($_POST['Historia_Prenatal'])){

$Historia_Prenatal = $_POST['Historia_Prenatal'];
$Salud = $_POST['Salud'];
$Conducta = $_POST['Conducta'];
$Familia = $_POST['Familia'];
$Escuela = $_POST['Escuela'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_anamnesis
(Historia_Prenatal,Salud,Conducta,Familia,Escuela,ID_Estudiante,ID_Empleado)
VALUES
('$Historia_Prenatal','$Salud','$Conducta','$Familia','$Escuela','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Anamnesis registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_deteccion_necesidades ===================== */
if(isset($_POST['Ambito_Cognoscitivo'])){

$Ambito_Cognoscitivo = $_POST['Ambito_Cognoscitivo'];
$Ambito_Psicomotor = $_POST['Ambito_Psicomotor'];
$Ambito_Psicosocial = $_POST['Ambito_Psicosocial'];
$Observaciones = $_POST['Observaciones'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_deteccion_necesidades
(Ambito_Cognoscitivo,Ambito_Psicomotor,Ambito_Psicosocial,Observaciones,ID_Estudiante,ID_Empleado)
VALUES
('$Ambito_Cognoscitivo','$Ambito_Psicomotor','$Ambito_Psicosocial','$Observaciones','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Detección registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_historial_medico ===================== */
if(isset($_POST['Tipo_Sangre'])){

$Alergias = $_POST['Alergias'];
$Enfermedades = $_POST['Enfermedades'];
$Tipo_Sangre = $_POST['Tipo_Sangre'];
$Observaciones = $_POST['Observaciones'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_historial_medico
(Alergias,Enfermedades,Tipo_Sangre,Observaciones,ID_Estudiante,ID_Empleado)
VALUES
('$Alergias','$Enfermedades','$Tipo_Sangre','$Observaciones','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Historial médico registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_registro_medicamentos ===================== */
if(isset($_POST['Medicamento'])){

$Medicamento = $_POST['Medicamento'];
$Dosis = $_POST['Dosis'];
$Fecha = $_POST['Fecha'];
$Responsable = $_POST['Responsable'];
$Motivo = $_POST['Motivo'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_registro_medicamentos
(Medicamento,Dosis,Fecha,Responsable,Motivo,ID_Estudiante,ID_Empleado)
VALUES
('$Medicamento','$Dosis','$Fecha','$Responsable','$Motivo','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Medicamento registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_permisos_salida ===================== */
if(isset($_POST['Autorizado_Por'])){

$Fecha = $_POST['Fecha'];
$Motivo = $_POST['Motivo'];
$Autorizado_Por = $_POST['Autorizado_Por'];
$Observaciones = $_POST['Observaciones'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_permisos_salida
(Fecha,Motivo,Autorizado_Por,Observaciones,ID_Estudiante,ID_Empleado)
VALUES
('$Fecha','$Motivo','$Autorizado_Por','$Observaciones','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Permiso registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_inventario ===================== */
if(isset($_POST['Nombre_Item'])){

$Nombre_Item = $_POST['Nombre_Item'];
$Tipo = $_POST['Tipo'];
$Descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];
$Codigo_MINERD = $_POST['Codigo_MINERD'];
$Fecha_Registro = $_POST['Fecha_Registro'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_inventario
(Nombre_Item,Tipo,Descripcion,Estado,Codigo_MINERD,Fecha_Registro,ID_Empleado)
VALUES
('$Nombre_Item','$Tipo','$Descripcion','$Estado','$Codigo_MINERD','$Fecha_Registro','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Artículo registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_entregas_alimentos ===================== */
if(isset($_POST['Proveedor'])){

$Fecha = $_POST['Fecha'];
$Proveedor = $_POST['Proveedor'];
$Producto = $_POST['Producto'];
$Cantidad = $_POST['Cantidad'];
$Unidad_Medida = $_POST['Unidad_Medida'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_entregas_alimentos
(Fecha,Proveedor,Producto,Cantidad,Unidad_Medida,ID_Empleado)
VALUES
('$Fecha','$Proveedor','$Producto','$Cantidad','$Unidad_Medida','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Entrega registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_menu_diario ===================== */
if(isset($_POST['Desayuno'])){

$Fecha = $_POST['Fecha'];
$Desayuno = $_POST['Desayuno'];
$Almuerzo = $_POST['Almuerzo'];
$Merienda = $_POST['Merienda'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_menu_diario
(Fecha,Desayuno,Almuerzo,Merienda,ID_Empleado)
VALUES
('$Fecha','$Desayuno','$Almuerzo','$Merienda','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Menú registrado correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_inspecciones_alimentacion ===================== */
if(isset($_POST['Inspector'])){

$Fecha = $_POST['Fecha'];
$Inspector = $_POST['Inspector'];
$Resultado = $_POST['Resultado'];
$Observaciones = $_POST['Observaciones'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_inspecciones_alimentacion
(Fecha,Inspector,Resultado,Observaciones,ID_Empleado)
VALUES
('$Fecha','$Inspector','$Resultado','$Observaciones','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Inspección registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_pasantias ===================== */
if(isset($_POST['Area'])){

$Area = $_POST['Area'];
$Actividades = $_POST['Actividades'];
$Habilidades_Desarrolladas = $_POST['Habilidades_Desarrolladas'];
$Fecha_Inicio = $_POST['Fecha_Inicio'];
$Fecha_Fin = $_POST['Fecha_Fin'];
$Estado = $_POST['Estado'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empresa = $_POST['ID_Empresa'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_pasantias
(Area,Actividades,Habilidades_Desarrolladas,Fecha_Inicio,Fecha_Fin,Estado,ID_Estudiante,ID_Empresa,ID_Empleado)
VALUES
('$Area','$Actividades','$Habilidades_Desarrolladas','$Fecha_Inicio','$Fecha_Fin','$Estado','$ID_Estudiante','$ID_Empresa','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Pasantía registrada correctamente"
: mysqli_error($conexion);

}

/* ===================== tb_autores ===================== */
if(isset($_POST['Nombre']) && isset($_POST['Nacionalidad']) && !isset($_POST['Nombre_Materia']) && !isset($_POST['Nombre_Periodo'])){

$Nombre = $_POST['Nombre'];
$Nacionalidad = $_POST['Nacionalidad'];
$Fecha_Nacimiento = $_POST['Fecha_Nacimiento'] ?? NULL;
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_autores
(Nombre,Nacionalidad,Fecha_Nacimiento,Estado)
VALUES
('$Nombre','$Nacionalidad','$Fecha_Nacimiento','$Estado')";

echo (mysqli_query($cn,$sql))
? "Autor registrado correctamente"
: mysqli_error($cn);

}

/* ===================== tb_editoriales ===================== */
if(isset($_POST['Nombre']) && isset($_POST['Telefono']) && !isset($_POST['Nacionalidad'])){

$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Estado = $_POST['Estado'];

$sql = "INSERT INTO tb_editoriales
(Nombre,Direccion,Telefono,Correo,Estado)
VALUES
('$Nombre','$Direccion','$Telefono','$Correo','$Estado')";

echo (mysqli_query($cn,$sql))
? "Editorial registrada correctamente"
: mysqli_error($cn);

}

/* ===================== tb_libros ===================== */
if(isset($_POST['Titulo'])){

$Titulo = $_POST['Titulo'];
$ISBN = $_POST['ISBN'];
$Anio_Publicacion = $_POST['Anio_Publicacion'];
$Descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];
$ID_Autor = $_POST['ID_Autor'];
$ID_Editorial = $_POST['ID_Editorial'];

$sql = "INSERT INTO tb_libros
(Titulo,ISBN,Anio_Publicacion,Descripcion,Estado,ID_Autor,ID_Editorial)
VALUES
('$Titulo','$ISBN','$Anio_Publicacion','$Descripcion','$Estado','$ID_Autor','$ID_Editorial')";

echo (mysqli_query($cn,$sql))
? "Libro registrado correctamente"
: mysqli_error($cn);

}

/* ===================== tb_prestamos ===================== */
if(isset($_POST['Fecha_Prestamo']) && isset($_POST['ID_Libro'])){

$Fecha_Prestamo = $_POST['Fecha_Prestamo'];
$Fecha_Devolucion = $_POST['Fecha_Devolucion'];
$Observaciones = $_POST['Observaciones'];
$Estado = $_POST['Estado'];
$ID_Libro = $_POST['ID_Libro'];
$ID_Estudiante = $_POST['ID_Estudiante'];
$ID_Empleado = $_POST['ID_Empleado'];

$sql = "INSERT INTO tb_prestamos
(Fecha_Prestamo,Fecha_Devolucion,Observaciones,Estado,ID_Libro,ID_Estudiante,ID_Empleado)
VALUES
('$Fecha_Prestamo','$Fecha_Devolucion','$Observaciones','$Estado','$ID_Libro','$ID_Estudiante','$ID_Empleado')";

echo (mysqli_query($cn,$sql))
? "Préstamo registrado correctamente"
: mysqli_error($cn);

}

?>

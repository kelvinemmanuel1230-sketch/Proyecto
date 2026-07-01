<?php
include("cn.php");

if (!isset($_POST['tabla'])) {
    die("Error: no se recibió la tabla");
}

$tabla = $_POST['tabla'];
$sql = "";

/* ================= tb_roles ================= */
if ($tabla == "roles") {

    $id = $_POST['ID_Rol'];
    $nombre = $_POST['Nombre_Rol'];
    $descripcion = $_POST['Descripcion'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_roles SET
    Nombre_Rol='$nombre',
    Descripcion='$descripcion',
    Estado='$estado'
    WHERE ID_Rol='$id'";
}

/* ================= tb_usuarios ================= */
if ($tabla == "usuarios") {

    $id = $_POST['ID_Usuario'];
    $usuario = $_POST['Usuario'];
    $clave = $_POST['Clave'];
    $estado = $_POST['Estado'];
    $rol = $_POST['ID_Rol'];

    $sql = "UPDATE tb_usuarios SET
    Usuario='$usuario',
    Clave='$clave',
    Estado='$estado',
    ID_Rol='$rol'
    WHERE ID_Usuario='$id'";
}

/* ================= tb_empleados ================= */
if ($tabla == "empleados") {

    $id = $_POST['ID_Empleado'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $cedula = $_POST['Cedula'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $direccion = $_POST['Direccion'];
    $fecha = $_POST['Fecha_Ingreso'];
    $estado = $_POST['Estado'];
    $usuario = $_POST['ID_Usuario'];

    $sql = "UPDATE tb_empleados SET
    Nombres='$nombres',
    Apellidos='$apellidos',
    Cedula='$cedula',
    Telefono='$telefono',
    Correo='$correo',
    Direccion='$direccion',
    Fecha_Ingreso='$fecha',
    Estado='$estado',
    ID_Usuario='$usuario'
    WHERE ID_Empleado='$id'";
}

/* ================= tb_maestros ================= */
if ($tabla == "maestros") {

    $id = $_POST['ID_Maestro'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $cedula = $_POST['Cedula'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $especialidad = $_POST['Especialidad'];
    $fecha = $_POST['Fecha_Ingreso'];
    $estado = $_POST['Estado'];
    $usuario = $_POST['ID_Usuario'];

    $sql = "UPDATE tb_maestros SET
    Nombres='$nombres',
    Apellidos='$apellidos',
    Cedula='$cedula',
    Telefono='$telefono',
    Correo='$correo',
    Especialidad='$especialidad',
    Fecha_Ingreso='$fecha',
    Estado='$estado',
    ID_Usuario='$usuario'
    WHERE ID_Maestro='$id'";
}

/* ================= tb_tutores ================= */
if ($tabla == "tutores") {

    $id = $_POST['ID_Tutor'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $cedula = $_POST['Cedula'];
    $parentesco = $_POST['Parentesco'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $direccion = $_POST['Direccion'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_tutores SET
    Nombres='$nombres',
    Apellidos='$apellidos',
    Cedula='$cedula',
    Parentesco='$parentesco',
    Telefono='$telefono',
    Correo='$correo',
    Direccion='$direccion',
    Estado='$estado'
    WHERE ID_Tutor='$id'";
}

/* ================= tb_estudiantes ================= */
if ($tabla == "estudiantes") {

    $id = $_POST['ID_Estudiante'];
    $matricula = $_POST['Matricula'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $fecha_nac = $_POST['Fecha_Nacimiento'];
    $sexo = $_POST['Sexo'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $fecha_ingreso = $_POST['Fecha_Ingreso'];
    $estado = $_POST['Estado'];
    $tutor = $_POST['ID_Tutor'];

    $sql = "UPDATE tb_estudiantes SET
    Matricula='$matricula',
    Nombres='$nombres',
    Apellidos='$apellidos',
    Fecha_Nacimiento='$fecha_nac',
    Sexo='$sexo',
    Direccion='$direccion',
    Telefono='$telefono',
    Correo='$correo',
    Fecha_Ingreso='$fecha_ingreso',
    Estado='$estado',
    ID_Tutor='$tutor'
    WHERE ID_Estudiante='$id'";
}

/* ================= tb_materias ================= */
if ($tabla == "materias") {

    $id = $_POST['ID_Materia'];
    $nombre = $_POST['Nombre_Materia'];
    $descripcion = $_POST['Descripcion'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_materias SET
    Nombre_Materia='$nombre',
    Descripcion='$descripcion',
    Estado='$estado'
    WHERE ID_Materia='$id'";
}

/* ================= tb_periodos_academicos ================= */
if ($tabla == "periodos") {

    $id = $_POST['ID_Periodo'];
    $nombre = $_POST['Nombre_Periodo'];
    $inicio = $_POST['Fecha_Inicio'];
    $fin = $_POST['Fecha_Fin'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_periodos_academicos SET
    Nombre_Periodo='$nombre',
    Fecha_Inicio='$inicio',
    Fecha_Fin='$fin',
    Estado='$estado'
    WHERE ID_Periodo='$id'";
}


/* ================= tb_empresas_pasantias ================= */
if ($tabla == "empresas") {

    $id = $_POST['ID_Empresa'];
    $nombre = $_POST['Nombre'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $contacto = $_POST['Contacto'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_empresas_pasantias SET
    Nombre='$nombre',
    Direccion='$direccion',
    Telefono='$telefono',
    Correo='$correo',
    Contacto='$contacto',
    Estado='$estado'
    WHERE ID_Empresa='$id'";
}

/* ================= tb_asignaciones_maestros ================= */
if ($tabla == "asignaciones") {

    $id = $_POST['ID_Asignacion'];
    $fecha = $_POST['Fecha_Asignacion'];
    $ano = $_POST['Ano_Escolar'];
    $estado = $_POST['Estado'];
    $maestro = $_POST['ID_Maestro'];
    $materia = $_POST['ID_Materia'];

    $sql = "UPDATE tb_asignaciones_maestros SET
    Fecha_Asignacion='$fecha',
    Ano_Escolar='$ano',
    Estado='$estado',
    ID_Maestro='$maestro',
    ID_Materia='$materia'
    WHERE ID_Asignacion='$id'";
}

/* ================= tb_asistencia ================= */
if ($tabla == "asistencia") {

    $id = $_POST['ID_Asistencia'];
    $fecha = $_POST['Fecha'];
    $estado = $_POST['Estado'];
    $observaciones = $_POST['Observaciones'];
    $estudiante = $_POST['ID_Estudiante'];
    $maestro = $_POST['ID_Maestro'];

    $sql = "UPDATE tb_asistencia SET
    Fecha='$fecha',
    Estado='$estado',
    Observaciones='$observaciones',
    ID_Estudiante='$estudiante',
    ID_Maestro='$maestro'
    WHERE ID_Asistencia='$id'";
}

/* ================= tb_calificaciones ================= */
if ($tabla == "calificaciones") {

    $id = $_POST['ID_Calificacion'];
    $nota = $_POST['Nota'];
    $observaciones = $_POST['Observaciones'];
    $fecha = $_POST['Fecha_Registro'];
    $estudiante = $_POST['ID_Estudiante'];
    $asignacion = $_POST['ID_Asignacion'];
    $periodo = $_POST['ID_Periodo'];

    $sql = "UPDATE tb_calificaciones SET
    Nota='$nota',
    Observaciones='$observaciones',
    Fecha_Registro='$fecha',
    ID_Estudiante='$estudiante',
    ID_Asignacion='$asignacion',
    ID_Periodo='$periodo'
    WHERE ID_Calificacion='$id'";
}

/* ================= tb_inscripciones ================= */
if ($tabla == "inscripciones") {

    $id = $_POST['ID_Inscripcion'];
    $fecha = $_POST['Fecha_Inscripcion'];
    $tipo = $_POST['Tipo'];
    $certificado = $_POST['Certificado_Medico'];
    $fotos = $_POST['Fotos'];
    $estado = $_POST['Estado'];
    $estudiante = $_POST['ID_Estudiante'];

    $sql = "UPDATE tb_inscripciones SET
    Fecha_Inscripcion='$fecha',
    Tipo='$tipo',
    Certificado_Medico='$certificado',
    Fotos='$fotos',
    Estado='$estado',
    ID_Estudiante='$estudiante'
    WHERE ID_Inscripcion='$id'";
}

/* ================= tb_reinscripciones ================= */
if ($tabla == "reinscripciones") {

    $id = $_POST['ID_Reinscripcion'];
    $fecha = $_POST['Fecha_Reinscripcion'];
    $periodo = $_POST['Periodo'];
    $observaciones = $_POST['Observaciones'];
    $estado = $_POST['Estado'];
    $estudiante = $_POST['ID_Estudiante'];

    $sql = "UPDATE tb_reinscripciones SET
    Fecha_Reinscripcion='$fecha',
    Periodo='$periodo',
    Observaciones='$observaciones',
    Estado='$estado',
    ID_Estudiante='$estudiante'
    WHERE ID_Reinscripcion='$id'";
}

/* ================= tb_notificaciones ================= */
if ($tabla == "notificaciones") {

    $id = $_POST['ID_Notificacion'];
    $tipo = $_POST['Tipo'];
    $fecha = $_POST['Fecha'];
    $mensaje = $_POST['Mensaje'];
    $estado = $_POST['Estado'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_notificaciones SET
    Tipo='$tipo',
    Fecha='$fecha',
    Mensaje='$mensaje',
    Estado='$estado',
    ID_Empleado='$empleado'
    WHERE ID_Notificacion='$id'";
}

/* ================= tb_solicitudes_documentos ================= */
if ($tabla == "solicitudes") {

    $id = $_POST['ID_Solicitud'];
    $tipo = $_POST['Tipo_Documento'];
    $motivo = $_POST['Motivo'];
    $fecha = $_POST['Fecha_Solicitud'];
    $estado = $_POST['Estado'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_solicitudes_documentos SET
    Tipo_Documento='$tipo',
    Motivo='$motivo',
    Fecha_Solicitud='$fecha',
    Estado='$estado',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Solicitud='$id'";
}

/* ================= tb_referimientos ================= */
if ($tabla == "referimientos") {

    $id = $_POST['ID_Referimiento'];
    $motivo = $_POST['Motivo'];
    $fecha = $_POST['Fecha'];
    $descripcion = $_POST['Descripcion'];
    $seguimiento = $_POST['Seguimiento'];
    $estado = $_POST['Estado'];
    $estudiante = $_POST['ID_Estudiante'];
    $maestro = $_POST['ID_Maestro'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_referimientos SET
    Motivo='$motivo',
    Fecha='$fecha',
    Descripcion='$descripcion',
    Seguimiento='$seguimiento',
    Estado='$estado',
    ID_Estudiante='$estudiante',
    ID_Maestro='$maestro',
    ID_Empleado='$empleado'
    WHERE ID_Referimiento='$id'";
}

/* ================= tb_anamnesis ================= */
if ($tabla == "anamnesis") {

    $id = $_POST['ID_Anamnesis'];
    $prenatal = $_POST['Historia_Prenatal'];
    $salud = $_POST['Salud'];
    $conducta = $_POST['Conducta'];
    $familia = $_POST['Familia'];
    $escuela = $_POST['Escuela'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_anamnesis SET
    Historia_Prenatal='$prenatal',
    Salud='$salud',
    Conducta='$conducta',
    Familia='$familia',
    Escuela='$escuela',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Anamnesis='$id'";
}

/* ================= tb_deteccion_necesidades ================= */
if ($tabla == "deteccion") {

    $id = $_POST['ID_Deteccion'];
    $cognoscitivo = $_POST['Ambito_Cognoscitivo'];
    $psicomotor = $_POST['Ambito_Psicomotor'];
    $psicosocial = $_POST['Ambito_Psicosocial'];
    $observaciones = $_POST['Observaciones'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_deteccion_necesidades SET
    Ambito_Cognoscitivo='$cognoscitivo',
    Ambito_Psicomotor='$psicomotor',
    Ambito_Psicosocial='$psicosocial',
    Observaciones='$observaciones',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Deteccion='$id'";
}

/* ================= tb_historial_medico ================= */
if ($tabla == "historial") {

    $id = $_POST['ID_Historial'];
    $alergias = $_POST['Alergias'];
    $enfermedades = $_POST['Enfermedades'];
    $sangre = $_POST['Tipo_Sangre'];
    $observaciones = $_POST['Observaciones'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_historial_medico SET
    Alergias='$alergias',
    Enfermedades='$enfermedades',
    Tipo_Sangre='$sangre',
    Observaciones='$observaciones',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Historial='$id'";
}

/* ================= tb_registro_medicamentos ================= */
if ($tabla == "medicamentos") {

    $id = $_POST['ID_Registro'];
    $medicamento = $_POST['Medicamento'];
    $dosis = $_POST['Dosis'];
    $fecha = $_POST['Fecha'];
    $responsable = $_POST['Responsable'];
    $motivo = $_POST['Motivo'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_registro_medicamentos SET
    Medicamento='$medicamento',
    Dosis='$dosis',
    Fecha='$fecha',
    Responsable='$responsable',
    Motivo='$motivo',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Registro='$id'";
}

/* ================= tb_permisos_salida ================= */
if ($tabla == "permisos") {

    $id = $_POST['ID_Permiso'];
    $fecha = $_POST['Fecha'];
    $motivo = $_POST['Motivo'];
    $autoriza = $_POST['Autorizado_Por'];
    $observaciones = $_POST['Observaciones'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_permisos_salida SET
    Fecha='$fecha',
    Motivo='$motivo',
    Autorizado_Por='$autoriza',
    Observaciones='$observaciones',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Permiso='$id'";
}

/* ================= tb_inventario ================= */
if ($tabla == "inventario") {

    $id = $_POST['ID_Item'];
    $item = $_POST['Nombre_Item'];
    $tipo = $_POST['Tipo'];
    $descripcion = $_POST['Descripcion'];
    $estado = $_POST['Estado'];
    $codigo = $_POST['Codigo_MINERD'];
    $fecha = $_POST['Fecha_Registro'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_inventario SET
    Nombre_Item='$item',
    Tipo='$tipo',
    Descripcion='$descripcion',
    Estado='$estado',
    Codigo_MINERD='$codigo',
    Fecha_Registro='$fecha',
    ID_Empleado='$empleado'
    WHERE ID_Item='$id'";
}

/* ================= tb_entregas_alimentos ================= */
if ($tabla == "entregas") {

    $id = $_POST['ID_Entrega'];
    $fecha = $_POST['Fecha'];
    $proveedor = $_POST['Proveedor'];
    $producto = $_POST['Producto'];
    $cantidad = $_POST['Cantidad'];
    $unidad = $_POST['Unidad_Medida'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_entregas_alimentos SET
    Fecha='$fecha',
    Proveedor='$proveedor',
    Producto='$producto',
    Cantidad='$cantidad',
    Unidad_Medida='$unidad',
    ID_Empleado='$empleado'
    WHERE ID_Entrega='$id'";
}

/* ================= tb_menu_diario ================= */
if ($tabla == "menu") {

    $id = $_POST['ID_Menu'];
    $fecha = $_POST['Fecha'];
    $desayuno = $_POST['Desayuno'];
    $almuerzo = $_POST['Almuerzo'];
    $merienda = $_POST['Merienda'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_menu_diario SET
    Fecha='$fecha',
    Desayuno='$desayuno',
    Almuerzo='$almuerzo',
    Merienda='$merienda',
    ID_Empleado='$empleado'
    WHERE ID_Menu='$id'";
}

/* ================= tb_inspecciones_alimentacion ================= */
if ($tabla == "inspecciones") {

    $id = $_POST['ID_Inspeccion'];
    $fecha = $_POST['Fecha'];
    $inspector = $_POST['Inspector'];
    $resultado = $_POST['Resultado'];
    $observaciones = $_POST['Observaciones'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_inspecciones_alimentacion SET
    Fecha='$fecha',
    Inspector='$inspector',
    Resultado='$resultado',
    Observaciones='$observaciones',
    ID_Empleado='$empleado'
    WHERE ID_Inspeccion='$id'";
}

/* ================= tb_pasantias ================= */
if ($tabla == "pasantias") {

    $id = $_POST['ID_Pasantia'];
    $area = $_POST['Area'];
    $actividades = $_POST['Actividades'];
    $habilidades = $_POST['Habilidades_Desarrolladas'];
    $inicio = $_POST['Fecha_Inicio'];
    $fin = $_POST['Fecha_Fin'];
    $estado = $_POST['Estado'];
    $estudiante = $_POST['ID_Estudiante'];
    $empresa = $_POST['ID_Empresa'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_pasantias SET
    Area='$area',
    Actividades='$actividades',
    Habilidades_Desarrolladas='$habilidades',
    Fecha_Inicio='$inicio',
    Fecha_Fin='$fin',
    Estado='$estado',
    ID_Estudiante='$estudiante',
    ID_Empresa='$empresa',
    ID_Empleado='$empleado'
    WHERE ID_Pasantia='$id'";
}

/* ================= tb_autores ================= */
if ($tabla == "autores") {

    $id = $_POST['ID_Autor'];
    $nombre = $_POST['Nombre'];
    $nacionalidad = $_POST['Nacionalidad'];
    $fecha_nacimiento = $_POST['Fecha_Nacimiento'] ?? NULL;
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_autores SET
    Nombre='$nombre',
    Nacionalidad='$nacionalidad',
    Fecha_Nacimiento='$fecha_nacimiento',
    Estado='$estado'
    WHERE ID_Autor='$id'";
}

/* ================= tb_editoriales ================= */
if ($tabla == "editoriales") {

    $id = $_POST['ID_Editorial'];
    $nombre = $_POST['Nombre'];
    $direccion = $_POST['Direccion'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['Correo'];
    $estado = $_POST['Estado'];

    $sql = "UPDATE tb_editoriales SET
    Nombre='$nombre',
    Direccion='$direccion',
    Telefono='$telefono',
    Correo='$correo',
    Estado='$estado'
    WHERE ID_Editorial='$id'";
}

/* ================= tb_libros ================= */
if ($tabla == "libros") {

    $id = $_POST['ID_Libro'];
    $titulo = $_POST['Titulo'];
    $isbn = $_POST['ISBN'];
    $anio = $_POST['Anio_Publicacion'];
    $descripcion = $_POST['Descripcion'];
    $estado = $_POST['Estado'];
    $autor = $_POST['ID_Autor'];
    $editorial = $_POST['ID_Editorial'];

    $sql = "UPDATE tb_libros SET
    Titulo='$titulo',
    ISBN='$isbn',
    Anio_Publicacion='$anio',
    Descripcion='$descripcion',
    Estado='$estado',
    ID_Autor='$autor',
    ID_Editorial='$editorial'
    WHERE ID_Libro='$id'";
}

/* ================= tb_prestamos ================= */
if ($tabla == "prestamos") {

    $id = $_POST['ID_Prestamo'];
    $fecha_prestamo = $_POST['Fecha_Prestamo'];
    $fecha_devolucion = $_POST['Fecha_Devolucion'];
    $observaciones = $_POST['Observaciones'];
    $estado = $_POST['Estado'];
    $libro = $_POST['ID_Libro'];
    $estudiante = $_POST['ID_Estudiante'];
    $empleado = $_POST['ID_Empleado'];

    $sql = "UPDATE tb_prestamos SET
    Fecha_Prestamo='$fecha_prestamo',
    Fecha_Devolucion='$fecha_devolucion',
    Observaciones='$observaciones',
    Estado='$estado',
    ID_Libro='$libro',
    ID_Estudiante='$estudiante',
    ID_Empleado='$empleado'
    WHERE ID_Prestamo='$id'";
}

$resultado = mysqli_query($cn,$sql);

if($resultado){

    switch($tabla){

        case "roles":
            header("Location: administrador/modificar_eliminar/roles.php");
        break;

        case "usuarios":
            header("Location: administrador/modificar_eliminar/usuarios.php");
        break;

        case "empleados":
            header("Location: administrador/modificar_eliminar/empleados.php");
        break;

        case "maestros":
            header("Location: maestro/modificar_eliminar/maestros.php");
        break;

        case "tutores":
            header("Location: tutor/modificar_eliminar/tutores.php");
        break;

        case "estudiantes":
            header("Location: estudiante/modificar_eliminar/estudiantes.php");
        break;

        case "materias":
            header("Location: maestro/modificar_eliminar/materias.php");
        break;

        case "periodos":
            header("Location: administrador/modificar_eliminar/periodos.php");
        break;

        case "empresas":
            header("Location: pasantias/modificar_eliminar/empresas.php");
        break;

        case "asignaciones":
            header("Location: maestro/modificar_eliminar/asignaciones.php");
        break;

        case "asistencia":
            header("Location: maestro/modificar_eliminar/asistencia.php");
        break;

        case "calificaciones":
            header("Location: maestro/modificar_eliminar/calificaciones.php");
        break;

        case "inscripciones":
            header("Location: registro/modificar_eliminar/inscripciones.php");
        break;

        case "reinscripciones":
            header("Location: registro/modificar_eliminar/reinscripciones.php");
        break;

        case "notificaciones":
            header("Location: administrador/modificar_eliminar/notificaciones.php");
        break;

        case "solicitudes":
            header("Location: administrador/modificar_eliminar/solicitudes.php");
        break;

        case "referimientos":
            header("Location: orientacion/modificar_eliminar/referimientos.php");
        break;

        case "anamnesis":
            header("Location: orientacion/modificar_eliminar/anamnesis.php");
        break;

        case "deteccion_necesidades":
            header("Location: orientacion/modificar_eliminar/deteccion_necesidades.php");
        break;

        case "historial_medico":
            header("Location: enfermeria/modificar_eliminar/historial_medico.php");
        break;

        case "registro_medicamentos":
            header("Location: enfermeria/modificar_eliminar/registro_medicamentos.php");
        break;

        case "permisos_salida":
            header("Location: enfermeria/modificar_eliminar/permisos_salida.php");
        break;

        case "inventario":
            header("Location: alimentacion/modificar_eliminar/inventario.php");
        break;

        case "entregas_alimentos":
            header("Location: alimentacion/modificar_eliminar/entregas_alimentos.php");
        break;

        case "menu_diario":
            header("Location: alimentacion/modificar_eliminar/menu_diario.php");
        break;

        case "inspecciones_alimentacion":
            header("Location: alimentacion/modificar_eliminar/inspecciones_alimentacion.php");
        break;

        case "pasantias":
            header("Location: pasantias/modificar_eliminar/pasantias.php");
        break;

        case "autores":
            header("Location: biblioteca/modificar_eliminar/autores.php");
        break;

        case "editoriales":
            header("Location: biblioteca/modificar_eliminar/editoriales.php");
        break;

        case "libros":
            header("Location: biblioteca/modificar_eliminar/libros.php");
        break;

        case "prestamos":
            header("Location: biblioteca/modificar_eliminar/prestamos.php");
        break;

        default:
            header("Location: index.php");
    }

    exit();

}else{
    echo "Error" . mysqli_error($cn);
}
?>

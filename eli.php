<?php
include("cn.php");

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';

switch($tabla){

case "roles":
    $eliminar = "DELETE FROM tb_roles WHERE ID_Rol='$id'";
    $redirigir = "/Administrador/modificar_eliminar/roles.php";
break;

case "usuarios":
    $eliminar = "DELETE FROM tb_usuarios WHERE ID_Usuario='$id'";
    $redirigir = "/Administrador/modificar_eliminar/usuarios.php";
break;

case "empleados":
    $eliminar = "DELETE FROM tb_empleados WHERE ID_Empleado='$id'";
    $redirigir = "/Administrador/modificar_eliminar/empleados.php";
break;

case "maestros":
    $eliminar = "DELETE FROM tb_maestros WHERE ID_Maestro='$id'";
    $redirigir = "/Maestro/modificar%20y%20eliminar/maestros.php";
break;

case "tutores":
    $eliminar = "DELETE FROM tb_tutores WHERE ID_Tutor='$id'";
    $redirigir = "/Secretario_academico/modificar%20y%20eliminar/tutores.php";
break;

case "estudiantes":
    $eliminar = "DELETE FROM tb_estudiantes WHERE ID_Estudiante='$id'";
    $redirigir = "/Secretario_academico/modificar%20y%20eliminar/estudiantes.php";
break;

case "materias":
    $eliminar = "DELETE FROM tb_materias WHERE ID_Materia='$id'";
    $redirigir = "/Maestro/modificar%20y%20eliminar/materias.php";
break;

case "periodos":
    $eliminar = "DELETE FROM tb_periodos_academicos WHERE ID_Periodo='$id'";
    $redirigir = "/Administrador/modificar_eliminar/periodos_academicos.php";
break;

case "empresas":
    $eliminar = "DELETE FROM tb_empresas_pasantias WHERE ID_Empresa='$id'";
    $redirigir = "/Pasantia/modificar%20y%20eliminar/empresas_pasantias.php";
break;

case "asignaciones":
    $eliminar = "DELETE FROM tb_asignaciones_maestros WHERE ID_Asignacion='$id'";
    $redirigir = "/Maestro/modificar%20y%20eliminar/asignaciones_maestros.php";
break;

case "asistencia":
    $eliminar = "DELETE FROM tb_asistencia WHERE ID_Asistencia='$id'";
    $redirigir = "/Maestro/modificar%20y%20eliminar/asistencias.php";
break;

case "calificaciones":
    $eliminar = "DELETE FROM tb_calificaciones WHERE ID_Calificacion='$id'";
    $redirigir = "/Maestro/modificar%20y%20eliminar/calificaciones.php";
break;

case "inscripciones":
    $eliminar = "DELETE FROM tb_inscripciones WHERE ID_Inscripcion='$id'";
    $redirigir = "/Secretario_academico/modificar%20y%20eliminar/inscripciones.php";
break;

case "reinscripciones":
    $eliminar = "DELETE FROM tb_reinscripciones WHERE ID_Reinscripcion='$id'";
    $redirigir = "/Secretario_academico/modificar%20y%20eliminar/reinscripciones.php";
break;

case "notificaciones":
    $eliminar = "DELETE FROM tb_notificaciones WHERE ID_Notificacion='$id'";
    $redirigir = "/Administrador/modificar_eliminar/notificaciones.php";
break;

case "solicitudes":
    $eliminar = "DELETE FROM tb_solicitudes_documentos WHERE ID_Solicitud='$id'";
    $redirigir = "/Secretario_academico/modificar%20y%20eliminar/solicitudes_documentos.php";
break;

default:
    die("Tabla no válida");
}

$resultadosEli = mysqli_query($cn, $eliminar);

if($resultadosEli){

    header("Location: $redirigir");
    exit();

}else{

    echo "<script>
    alert('No se pudo eliminar');
    window.history.back();
    </script>";

}
?>
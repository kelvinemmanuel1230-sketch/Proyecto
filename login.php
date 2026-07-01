<?php
include("cn.php");

$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];

$sql = "SELECT
tb_usuarios.*,
tb_roles.Nombre_Rol
FROM tb_usuarios
INNER JOIN tb_roles
ON tb_usuarios.ID_Rol = tb_roles.ID_Rol
WHERE Usuario = ?
AND Clave = ?
AND tb_usuarios.Estado = 'Activo'";

$stmt = mysqli_prepare($cn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $usuario, $clave);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {

    $datos = mysqli_fetch_assoc($resultado);

    session_start();

    $_SESSION['ID_Usuario'] = $datos['ID_Usuario'];
    $_SESSION['Usuario'] = $datos['Usuario'];
    $_SESSION['ID_Rol'] = $datos['ID_Rol'];

switch(strtolower($datos['Nombre_Rol'])){

    case "administrador":
        header("Location: /Administrador/Inicio.html");
        exit();
    break;

    case "alimentacion":
        header("Location: /Alimentacion/Inicio.html");
        exit();
    break;

    case "bibliotecario":
        header("Location: /Bibliotecario/Inicio.html");
        exit();
    break;

    case "compras":
        header("Location: /Compras/Inicio.html");
        exit();
    break;

    case "coordinador":
        header("Location: /Coordinador/Inicio.html");
        exit();
    break;

    case "director":
        header("Location: /Director/Inicio.html");
        exit();
    break;

    case "enfermera":
        header("Location: /Enfermera/Inicio.html");
        exit();
    break;

    case "inventario":
        header("Location: /Inventario/Inicio.html");
        exit();
    break;

    case "maestro":
        header("Location: /Maestro/Inicio.html");
        exit();
    break;

    case "orientador":
        header("Location: /Orientador/Inicio.html");
        exit();
    break;

    case "pasantia":
        header("Location: /Pasantia/Inicio.html");
        exit();
    break;

    case "secretario_academico":
        header("Location: /Secretario_academico/Inicio.html");
        exit();
    break;

    case "secretario_docente":
        header("Location: /Secretario_Docente/Inicio.html");
        exit();
    break;

    case "subdirector":
        header("Location: /Subdirector/Inicio.html");
        exit();
    break;

    default:
        echo "Rol no válido";
}

}else{

    echo "<script>
    alert('Usuario o contraseña incorrectos');
    window.location='index.php';
    </script>";

}
?>

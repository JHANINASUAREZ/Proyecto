<?php
// Inicia el almacenamiento en el buffer de salida
ob_start();

// Inicia la sesión al principio del archivo
session_start();

// Requiere el archivo de conexión
require_once('conexion.php');

// Obtiene los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar las credenciales del usuario
$query = "SELECT u.id, u.correo, u.contrasena, u.nombre, r.nombre as rol FROM usuarios u LEFT JOIN roles r ON u.rol_id = r.id WHERE correo = '$correo' AND contrasena = '$contrasena'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

// Verifica si se encontró un usuario con las credenciales proporcionadas
if ($result->num_rows > 0) {
    // Almacena información de usuario en la sesión
    $_SESSION['user'] = $correo;
    $_SESSION['rol'] = $row['rol'];

    // Redirecciona según el rol del usuario
    if ($row['rol'] == 'administrador') {
        header("Location:../Paginas/Administrador/HomeA.php");
    } elseif ($row['rol'] == 'docente') {
        header("Location:../Paginas/Usuario/HomeU.php");
    } else {
        // Redirige a una página predeterminada si el rol no está definido
        header("Location:../Paginas/Usuario/HomeU.php");
    }
} else {
    // Redirige de vuelta a la página de inicio de sesión con un mensaje de error
    header("Location: ../index.php?error=cuenta_no_existe");
}

// Limpia el buffer de salida y envía los datos almacenados al navegador
ob_end_flush();
?>
<?php 

function obtener_nombre($ci_new){

    $query = "SELECT * FROM usuarios WHERE ci = '$ci_new' ";
    $conexion= new mysqli('monorail.proxy.rlwy.net','root','$password = "uiszwdaBOhGxlHiwFJHRlbdJbaMLDnqy";','railway','54866');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $nombreUsuario = $row['nombre'];
    return $nombreUsuario;
}

function obtener_apellido($ci_new){
    $query = "SELECT * FROM usuarios WHERE ci= '$ci_new'";
    $conexion= new mysqli('monorail.proxy.rlwy.net','root','$password = "uiszwdaBOhGxlHiwFJHRlbdJbaMLDnqy";','railway','54866');
$result = $conexion->query($query);

$row = $result->fetch_assoc();
$apellidoUsuario = $row['apellido'];
return $apellidoUsuario;
}

function obtener_correo($ci_new){
    $query = "SELECT * FROM usuarios WHERE ci = '$ci_new'";
    $conexion= new mysqli('monorail.proxy.rlwy.net','root','$password = "uiszwdaBOhGxlHiwFJHRlbdJbaMLDnqy";','railway','54866');
    $result = $conexion->query($query);
    
    $row = $result->fetch_assoc();
    $correoUsuario = $row['correo'];
    return $correoUsuario;
}
?>
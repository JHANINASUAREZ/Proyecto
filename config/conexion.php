<?php
 $host = "monorail.proxy.rlwy.net";
 $user = "root";
 $password="uiszwdaBOhGxlHiwFJHRlbdJbaMLDnqy";
 $db = "railway";
 $port = "54866";

 $conexion = new mysqli($host, $user, $password, $db, $port);

if($conexion -> connect_errno){
    echo "fallo la conexion a la base" . $conexion -> connect_errno;
}
?>
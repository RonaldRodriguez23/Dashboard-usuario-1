<?php

$conexion = mysqli_connect("localhost", "root", "", "login_registre_db");



if ($conexion) {
    echo 'Conectado';
} else {
    echo 'No se conectó';
}

?>

<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "login_registre_db");

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Consulta para insertar los datos en la tabla usuarios
    $query = "INSERT INTO `usuarios` (`nombre`, `correo`, `usuario`, `password`) VALUES ('$nombre', '$correo', '$usuario', '$password')";
    
    // Ejecuta la consulta
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        // Registro exitoso
        echo '<script>alert("Registro exitoso. Ahora puedes iniciar sesión."); window.location = "../index.php";</script>';
    } else {
        // Manejar el error si la consulta no fue exitosa
        echo 'Error en la consulta: ' . mysqli_error($conexion);
    }
} else {
    // Redireccionar si el formulario no se ha enviado
    header("Location: ../index.php");
    exit();
}

// Cerrar la conexión
mysqli_close($conexion);
?>

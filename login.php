<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "login_registre_db");

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Consulta para verificar credenciales
    $query = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        // Verificar si se encontró el usuario
        if (mysqli_num_rows($resultado) > 0) {
            // Obtener la información del usuario
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar la contraseña
            if (password_verify($password, $usuario["password"])) {
                // Inicio de sesión exitoso
                echo '<script>alert("Inicio de sesión exitoso."); window.location = "../dashboard.html";</script>';
            } else {
                // Contraseña incorrecta
                echo '<script>alert("Contraseña incorrecta. Inténtalo de nuevo."); window.location = "../index.php";</script>';
            }
        } else {
            // Usuario no encontrado
            echo '<script>alert("Usuario no encontrado. Regístrate si eres nuevo."); window.location = "../Registre.php";</script>';
        }
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

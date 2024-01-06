<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <!-- Imagen De Fondo -->
        <div class="img">
            <img src="img/portada1.jpeg" alt="Fondo" />
        </div>
        <!-- Formulario de Login y registro -->
        <div class="container">
            <div>
                <div class="contenedor_login">
                    <img src="img/perfil3.jpeg" alt="perfil">
                    <form action="php/login.php" method="POST" class="formulario_login">
                    <input type="text" name="correo" placeholder="Correo" required >
                    <input type="password" name="password" placeholder="Contraseña" required>
                        <button>Login In</button>
                    </form>
                </div> 
                <div class="pag-reg">
                    <a href="Registre.php">Registro</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

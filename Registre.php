<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <!--Imagen De Fondo-->
        <div class="img">
            <img src="img/portada2.jpeg" alt="Fondo">
        </div>
        <!--Formulario de Login y registro-->
        <div class="container">
            <div>
                <div class="contenedor_login">
                    <img src="img/perfil3.jpeg" alt="perfil">
                    <form action="php/registro.php" method="POST" class="formulario_register">
                        <input type="text" placeholder="Nombre completo" name="nombre" required >
                        <input type="text" placeholder="Correo Electronico" name="correo" required>
                        <input type="text" placeholder="Usuario"name="usuario" required>
                        <input type="password" placeholder="Contraseña"name="password" required>
                        <button>Regístrate</button> 
                        
                    </form>
                    <div class="pag-reg">
                    <a href="index.php">Iniciar </a>
                </div>
                </div>


            </div>
            

        </div>
    </main>

</body>
</html>
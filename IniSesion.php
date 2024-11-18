<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIME Blog</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="logo-icon">LOGOTIPO</div>
            <span>FIME BLOG</span>
        </div>
        <nav class="nav">
            <a href="Nosotros.php">INICIO</a>
            <a href="Formulario.php">CONTACTO</a>
            <a href="Buscador.php" class="search-link">BUSCAR</a>
            <input type="text" class="search-bar" placeholder="Buscar pregunta, discusión o lista...">
        </nav>
        <div class="user-options">
            <a href="IniSesion.php">INICIAR SESIÓN</a>
            <a href="Registro.php">REGISTRO</a>
            <span class="user-icon">👤</span>
            <span class="settings-icon">⚙️</span>
        </div>
    </header>

    <div class="contact-form">
        <h2>Inicio de sesión</h2>
        <form action="contact.php" method="post">


            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            
            <a href="ReCuenta.php" target="_blank">
            <button type="button">Recuperar cuenta</button>
        </a>
            <button type="submit">Iniciar sesion</button>
        </form>
    </div>


</body>

</html>
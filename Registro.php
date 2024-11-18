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
            <a href="Nosotros.html">INICIO</a>
            <a href="Formulario.php">CONTACTO</a>
            <a href="index.html" class="search-link">BUSCAR</a>
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
        <h2>Registro</h2>
        <form action="contact.php" method="post">

            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Verifica tu contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <a href="IniSesion.php" target="_blank">
            <button type="button">Ya tengo cuenta</button>
        </a>
            <button type="submit">Registrate</button>
        </form>
    </div>


</body>

</html>
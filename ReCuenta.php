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
            <a href="PdUsuario.php" class="user-icon">👤</a>
            <span class="settings-icon">⚙️</span>
        </div>
    </header>

    <div class="contact-form">
        <h2>Recuperar cuenta</h2>
        <form action="contact.php" method="post">
            

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

           <div class="re-button">
           <button type="submit">Enviar codigo de recuperación</button>
            </div>
        </form>
    </div>

    
</body>
</html>
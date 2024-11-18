<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIME Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
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

    <body>
        <div class="info-menu">
            <h2>Información del Sitio</h2>
            <ul>
                <!-- Términos y Condiciones -->
                <li>
                    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#terminos">Términos y Condiciones</button>
                    <div class="collapse mt-3" id="terminos">
                        <div class="card card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ex, aliquam et nulla molestias,
                            suscipit nobis qui, sunt porro ipsum eum fugiat? Ab quam rerum consectetur illum? Hic, animi ad.
                        </div>
                    </div>
                </li>
    
                <!-- Políticas -->
                <li>
                    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#politicas">Políticas</button>
                    <div class="collapse mt-3" id="politicas">
                        <div class="card card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ex, aliquam et nulla molestias,
                            suscipit nobis qui, sunt porro ipsum eum fugiat? Ab quam rerum consectetur illum? Hic, animi ad.
                        </div>
                    </div>
                </li>
    
                <!-- Notas de Actualización -->
                <li>
                    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#actualizacion">Notas de Actualización</button>
                    <div class="collapse mt-3" id="actualizacion">
                        <div class="card card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto ex, aliquam et nulla molestias,
                            suscipit nobis qui, sunt porro ipsum eum fugiat? Ab quam rerum consectetur illum? Hic, animi ad.
                        </div>
                    </div>
                </li>
            </ul>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>

</html>
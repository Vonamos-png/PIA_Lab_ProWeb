<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIME Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <main>
    <section class="profile-container">
      <h1>Perfil de usuario</h1>
      <div class="content">
        <div class="sections">
          <div class="section">MIS PREGUNTAS</div>
          <div class="section">MIS LISTAS</div>
          <div class="section">MIS DISCUSIONES</div>
        </div>
        <div class="options">
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalPresentacion">HISTORIAL</button>
                    <div class="modal fade" id="modalPresentacion" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Historial</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>LOREM</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

          
          <div class="options">
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalPresentacion">INFORMACIÓN DE CUENTA</button>
                    <div class="modal fade" id="modalPresentacion" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">INFORMACIÓN DE CUENTA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>LOREM</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

          
          <div class="options">
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalPresentacion">PERSONALIZAR CUENTA</button>
                    <div class="modal fade" id="modalPresentacion" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">PERSONALIZAR CUENTA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>LOREM</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

          <button>CONFIGURACIÓN DE CUENTA</button>
        </div>
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>
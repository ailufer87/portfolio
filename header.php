
 <header>
        <!-- BARRA DE NAVEGACION -->
        <nav class="navbar navbar-expand-md mb-4 navbar-light bg-transparent">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo $pg=="index"? "active" : "" ?>" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo $pg=="sobre-mi"? "active" : "" ?>" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo $pg=="proyectos"? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 <?php echo $pg=="contacto"? "active" : "" ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn-rojo"><i class="fa-solid fa-download"></i> Descargar mi CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
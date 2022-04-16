<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <script src="CSS/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- archivo js para que funcione la barra de nav-->
    <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/estilos.css"> <!-- CARGAR ULTIMO PARA QUE SOBRE ESCRIBA BOOTSTRAP -->

</head>

<body id="contacto">
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
                            <a class="nav-link px-4 py-1" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 active " href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn-rojo"><i class="fa-solid fa-download"></i> Descargar mi CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pb-5 pt-3">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 ">
                <p>Te invito a que te contactes enviando un mensaje o bien por WA</p>
            </div>
            <div class="col-12 col-sm-6 ">
                <form action="" method="post">
                    <!-- FORMULARIO DE CONTACTO -->
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Email" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTel" id="txtTel" placeholder="Telefono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtmensaje" placeholder="Escribe tu mensaje"
                            class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn-blanco px-4 py-1">ENVIAR</button>
                    </div>

                </form>

            </div>
        </div>

    </main>

    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
               <a class= px-2 href="http://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="http://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="https://depcsuit.com" title="DePC">SponsorDePC</a>
            </div>
            <div class="col-12 col-sm-3 mb-4">
                <a href="mailto:ailu.fer87@gmail.com">ailu.fer87@gmail.com</a>
            </div>
    </footer>
        <div class="whatsapp pt-3 pb-4 px-3">
            <a href="https://api.whatsapp.com/send?phone=2213506283" title="Whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
</body>
</a>
</html>
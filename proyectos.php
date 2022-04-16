<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <script src="CSS/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- archivo js para que funcione la barra de nav-->
    <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/estilos.css"> <!-- CARGAR ULTIMO PARA QUE SOBRE ESCRIBA BOOTSTRAP -->

</head>

<body id="proyectos">
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
                            <a class="nav-link px-4 py-1 active" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 " href="contacto.php">Contacto</a>
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
            <div class="col-12 pb-4 pt-3">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-5 pt-1">
                <p>Los siguientes son algunos de los proyectos que he realizado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <!--Agrega otro DIV para empujar hacia adentro la columna y que sigan entrando las 3 a pesar de "agregar" espacio entre ellas con el paddign-->
                <div id="caja-proyecto">
                    <img src="imagenes/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="p-3 d-block">ABM CLIENTES</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en
                        HTML, CSS, PHP,Bootstrap y Json.
                    </p>
                    <div class="row">
                        <div class="col-6 py-5 ps-4">
                            <a href="https//:" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 py-5 codigo-f">
                            <a href="http://">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4 p-3">
                <div id="caja-proyecto">
                    <img src="imagenes/abmventas.png" alt="Sistema de gestion de ventas" class="img-fluid">
                    <h2 class="p-3 d-block">SISTEMA DE GESTION DE VENTAS</h2>
                    <p class="p-3 pb-5 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS,
                        PHP,
                        MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="row">
                        <div class="col-6 py-5 ps-4">
                            <a href="https//:" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 py-5 codigo-f">
                            <a href="http://">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4 p-3">
                <div id="caja-proyecto">
                    <img src="imagenes/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                    <p class="p-3 pb-5 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX,
                        HTML,
                        CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                        funcionalidades a fines.</p>
                    <div class="row">
                        <div class="col-6 ps-4 py-5">
                            <a href="https//:" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 py-5 codigo-f">
                            <a href="http://">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a class=px-2 href="http://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
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
        <a href="https://api.whatsapp.com/send?phone=2213506283" title="Whatsapp" target="_blank"><i
                class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
</body>
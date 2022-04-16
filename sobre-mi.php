<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <script src="CSS/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- archivo js para que funcione la barra de nav-->
    <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/estilos.css"> <!-- CARGAR ULTIMO PARA QUE SOBRE ESCRIBA BOOTSTRAP -->

</head>

<body id="sobre-mi">
    <header>
        <!-- BARRA DE NAVEGACION -->
        <nav class="navbar navbar-expand-md mb-4 navbar-light bg-transparent">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 active" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
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

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-7 d-block">
                    <h1 class="mt-5 pb-4">Sobre mi</h1>
                    <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloribus autem
                        fugit maiores libero minima voluptatibus mollitia inventore eligendi quasi. Laudantium hic
                        dolore, quasi a labore eaque quisquam delectus voluptates.</p>
                    <a href="../portfolio/contacto.html" class="btn btn-rojo mt-4">Enviar mensaje</a>

                </div>
                <div class="col-12 col-sm-3 d-block mb-5 foto">
                    <img src="../portfolio/imagenes/foto.png.png" alt="Nadia Ailen Fernandez" class="mt-5 foto">
                </div>
            </div>
        </div>
        <div class="container-fluid fila-roja py-4">
            <div class="container">
                <h2>Stack tecnologico</h2>
                <div class="row">
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">Javascript</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1209/javascript.jpeg" alt="Javascript">

                        </div>

                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">PHP</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" alt="PHP">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">HTML-5</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/2538/kEpgHiC9.png" alt="HTML-5">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">React.js</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" alt="React.js">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">jQuery</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg" alt="jQuery">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">Bootstrap</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1101/C9QJ7V3X.png" alt="Bootstrap">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">Laravel</h3>
                            <img class="icono d-block mx-auto" src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png" alt="Laravel">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">MySQL</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png" alt="MySQL">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">CSS</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/6727/css.png" alt="CSS">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">GIT</h3>
                            <img class="icono d-block mx-auto" src="https://img.stackshare.io/service/1046/git.png" alt="GIT">

                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">Apache</h3>
                            <img class="icono d-block mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png" alt="Apache">
                        </div>

                    </div>

                    <div class="col-sm-2 col-6 pt-4">
                        <div id="caja-tecnologia" class="px-4 py-5 d-block">
                            <h3 class="d-block pt-1">Mercadopago</h3>
                            <img class="icono d-block px-4" src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg" alt="Mercadopago">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="experiencia-lab" class="pt-5 pb-4">
                <h2><i class="fa-solid fa-briefcase"></i> Experiencia laboral</h2>
            </div>
            <div class="shadow">
                <div class="row mt-4">
                    <div class="col-sm-2 d-block " id="logos-trabajos">
                        <img src="imagenes/logo-depcsuite.svg" alt="DePC" class="p-5 my-auto baw">
                    </div>
                    <div class="col-sm-10 col-12" id="texto-trabajos">
                        <h3>Director- Founder</h3>
                        <h4>DEPCSUITE SA</h4>
                        <h5>2016 - presente</h5>
                        <p>Lidero el desarrollo y posicionamiento de la empresa en sus tres líneas de negocio: cloud
                            services, desarrollo de sistemas y educación IT en Buenos Aires, con sedes en Puerto Madero
                            y Belgrano. Celebración de convenios estratégicos. Desarrollo de nuevos productos.
                            Coordinación del área de sistemas y educación. Docente de cursos tecnológicos en: Laravel,
                            PHP, HTML, CSS, Javascript, jQuery, AJAX, React.js, Bootstrap, GitLab, HTTP Apache2, SSL,
                            MySQL, HAProxy, ProFTPd, virtualización con VMware ESXi, GNU/Linux Debian.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2 d-block " id="logos-trabajos">
                        <img src="imagenes/todocash-vertical.svg" alt="DePC" class="p-5 my-auto baw">
                    </div>
                    <div class="col-sm-10 col-12" id="texto-trabajos">
                        <h3>Gerente de sistemas - Co-Founder</h3>
                        <h4>TodoCash</h4>
                        <h5>2021 - presente</h5>
                        <p>Gestión de sistemas para la primera red de cajeros operada por una empresa no financiera con
                            procesamiento independiente que funciona con billeteras virtuales.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-2 d-block " id="logos-trabajos">
                        <img src="imagenes/uba.jpg" alt="DePC" class="p-5 my-auto baw">
                    </div>
                    <div class="col-sm-10 col-12" id="texto-trabajos">
                        <h3>Desarrollador Senior Full Stack</h3>
                        <h4>Universidad de Buenos Aires</h4>
                        <h5>ago 2015 - ene 2020</h5>
                        <p>Planeamiento del proyecto, seguimiento, reuniones de avance, estimación de entregables. Trato
                            con clientes y equipos internos. Desarrollo de nuevos sistemas. Capacitar y organizar el
                            área de desarrollo. Gestionar los ambientes de desarrollo. Administrar repositorio. Asignar
                            tareas al equipo. Tecnologías: Laravel, PHP, HTML, CSS, Javascript, jQuery, AJAX, SQL
                            Server, IIS, Bootstrap, Microsoft Project, GitLab.</p>
                    </div>
                </div>
            </div>
            <div id="experiencia-lab" class="pt-5 pb-4">
                <h2><i class="fa-solid fa-graduation-cap"></i></i> Formacion academica</h2>
            </div>
            <div class="shadow" id="logos-trabajos">
                <!--puse un ID q quizas no sirva-->
                <div class="row mt-4 mb-3">
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="../portfolio/imagenes/ean.jpg" alt="Escuela Argentina de Negocios" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Licenciado en Tecnología</h3>
                        <h4>Escuela Argentina de Negocios</h4>
                        <h5>2015 – 2020</h5>
                        <p>http://www.ean.edu.ar/</p>
                    </div>
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="imagenes/unlam.png" alt="UNLM" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Ingeniería en Informática</h3>
                        <h4>Universidad Nacional de La Matanza</h4>
                        <h5>2006 – 2010</h5>
                        <p>Materias aprobadas 20 de 41, 48%.<br>
                            http://unlam.edu.ar</p>
                    </div>
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="imagenes/tecnico-informatico.png" alt="Tecnico en informatica" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Tecnico en informatica</h3>
                        <h4>Colegio Parroquial San Juan XXIII</h4>
                        <h5>2003 – 2005</h5>
                        <p>http://colparroquialjuan23.edu.ar</p>
                    </div>
                </div>
            </div>
            <div id="experiencia-lab" class="pt-5 pb-4">
                <h2><i class="fa-solid fa-graduation-cap"></i></i> Cursos de desarrollo profesional</h2>
            </div>
            <div class="shadow" id="logos-trabajos">
                <!--puse un ID q quizas no sirva-->
                <div class="row mt-4 mb-3">
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="../portfolio/imagenes/utn.jpg" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Programa Ejecutivo en Project Management</h3>
                        <h4>Universidad Tecnológica Nacional</h4>
                        <h5>Expedición: may 2018</h5>
                    </div>
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="imagenes/ean (1).jpg" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Diplomatura en Marketing</h3>
                        <h4>Escuela Argentina de Negocios</h4>
                        <h5>Expedición: dic 2017</h5>
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="../portfolio/imagenes/fundacion-impulsar.png" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Capacitación en Planes de Negocio</h3>
                        <h4>Fundacion impulsar</h4>
                        <h5>Expedición: may 2018</h5>
                    </div>
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="imagenes/unlam.png" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Programación Web ASP.NET</h3>
                        <h4>Escuela Argentina de Negocios</h4>
                        <h5>Expedición: dic 2019</h5>
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="../portfolio/imagenes/microsoft.jpg" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>Programación C# .NET</h3>
                        <h4>Microsoft</h4>
                        <h5>Expedición: dic 2006</h5>
                    </div>
                    <div class="col-sm-1 ps-4 pt-3">
                        <img src="imagenes/tecnico-informatico.png" alt="DePCSuite" class="baw">
                    </div>
                    <div class="col-sm-5" id="texto-trabajos">
                        <h3>English Intermediate B2</h3>
                        <h4>Instituto John Milton de Cultura Inglesa</h4>
                        <h5>Expedición: dic 2006</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid " id="fila-gris">

            <div class="container" >
                <div class="row py-5 mx-0" >
                    <div class="col-12 col-sm-6  pe-5 d-block">
                        <div class="row shadow caja-i-h ">
                            <div class="col-sm-4 p-0 ">
                                <i class="fa-solid fa-message imagen-ih pt-5"></i>
                            </div>
                            <div class="col-sm-8 ">
                                <p class="p-5"><span class="negrita">IDIOMAS</span> <br>
                                    <!--tambien se puede hacer con lista-->
                                    ESPAÑOL - Nativo <br>
                                    INGLÉS - Intermediate B2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pe-5 " >
                        <div class="row shadow caja-i-h  ">
                            <div class="col-sm-4 p-0 " >
                                <i class="fa-solid fa-star imagen-ih pt-5"></i>
                            </div>
                            <div class="col-sm-8 ">
                                <p class="p-5"><span class="negrita">HOBBIES</span> <br>
                                    Tenis
                                </p>
                            </div>
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
        <a href="https://api.whatsapp.com/send?phone=2213506283" title="Whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

</body>
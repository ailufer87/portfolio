<?php
    $pg="index";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <script src="CSS/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- archivo js para que funcione la barra de nav-->
    <link rel="stylesheet" href="CSS/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/estilos.css"> <!-- CARGAR ULTIMO PARA QUE SOBRE ESCRIBA BOOTSTRAP -->

</head>

<body id="inicio">
   <?php include_once ("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-4">
                <a class="movimiento" href="proyectos.php"><img src="imagenes/cohete.svg" alt="cohete" class="cohete" ></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 my-4  text-center offset-sm-3  "> <!--CENTRE CON OFFSET-->
                <p class= "bienvenido p-1 ">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
            </div>
        </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a class="btn btn-azul shadow" href="proyectos.php">Conoce mis proyectos</a>
                </div>
            </div>
    </main>
    
    <?php include_once ("footer.php"); ?>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=2213506283" title="Whatsapp" target="_blank"><i
                class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
</body>
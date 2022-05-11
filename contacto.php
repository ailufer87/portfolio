<?php
    $pg="contacto";

    if ($_POST){
        if($_POST ["btnEnviar"]){ //creo q no es necesario este if

        $nombre= $_POST ("txtNombre");
        $correo= $_POST ("txtCorreo");
        $telefono= $_POST ("txtTel");
        $mensaje= $_POST ("txtmensaje");

        
// Multiple recipients
$to = 'ailu.fer87@gmail.com'; // note the comma

// Subject
$subject = 'Recibiste un mensaje desde tu web';

// Message
$message =  "nombre: $nombre <br>
correo: $correo <br>
telefono: $telefono <br>
mensaje: $mensaje"
;

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: ailu.fer87@gmail.com';
$headers[] = 'From: contacto@portfolio.com>';

// Mail it
//mail($to, $subject, $message, implode("\r\n", $headers)); lo comento porque no tengo hosting

header ("Location: http://localhost/portfolio/gracias.php");

} 
}
?>

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
    <?php include_once ("header.php"); ?>

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

    <?php include_once ("footer.php"); ?>
        <div class="whatsapp pt-3 pb-4 px-3">
            <a href="https://api.whatsapp.com/send?phone=2213506283" title="Whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
</body>
</a>
</html>
<?php 

    $pg = "contacto";

    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMsj"];

        // Varios destinatarios
        $para  = 'emilianopicart1@hotmail.com' . ', '; // atención a la coma
        $titulo = 'Recibiste un mensaje desde tu web';

        // mensaje
        $cuerpo = "
        Nombre: $nombre <br>
        Correo: $correo <br>
        Telefono: $telefono <br>
        Mensaje: $mensaje";

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: emilianopicart1@hotmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@diegoguarino.com.ar' . "\r\n";

        // Enviarlo
        //mail($para, $título, $mensaje, $cabeceras);
        header("Location: confirmacion.php");
    }
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="shortcut icon" href="images/ep.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php") ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="textNombre" id="txtNombre" required placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" required placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMsj" id="txtMsj" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn px-3 shadow">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto mb-4">
        <div class="btnwts">
            <a href="https://api.whatsapp.com/send/?phone=543442646995&text&type=phone_number&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #ffffff"></i></a>
        </div>
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/EmiPicart" target="_blank"><i class="fa-brands fa-github" style="color: #ffffff;"></i></a>
                <a href="https://www.linkedin.com/in/emiliano-picart-049b3427a/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:emilianopicart1@hotmail.com">emilianopicart1@hotmail.com</a>
            </div>
        </div>
    </footer>
</body>
</html>
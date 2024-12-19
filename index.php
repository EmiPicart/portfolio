<?php 

    $pg = "index";

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
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php") ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="p-1">Bienvenid@ a mi sitio web sobre desarollo de sistemas.</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-sm-6 text-center offset-sm-3">
                <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
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
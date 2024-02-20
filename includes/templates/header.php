<?php
if (!isset($_SESSION)) {
    session_start();
}
$auth = $_SESSION["login"] ?? false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Electric Buffalo | Inicio</title>
    <link rel="icon" type="image/x-icon" href="/build/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/css/app.css.map">
    <script src="/build/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header class="header">


        <div class="contenedor contenido-header">

            <a href="index.php"><img src="/build/img/logoBuf.png" alt="Logo Bufalo" class="img-fluid"></a>
            <p class="menu-mobile"><i class="fa-solid fa-bars"></i></p>
            <div class="header-derecha">
                <div class="redes-sociales">
                    <?php if(!$auth) { ?>
                    <a href="login.php" class="fs-3 me-5">Iniciar sesión</a>
                    <?php } else { ?>
                        <a href="logout.php" class="fs-3 me-5">Cerrar sesión</a>
                    <?php } ?>
                    <a href="https://www.youtube.com/@theelectricbuffalo666" class="youtube" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.instagram.com/theelectricbuffalo/" class="insta" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank">
                        <i class="fa-brands fa-spotify"></i>
                    </a>
                </div>
                <nav class="navegacion-principal">
                    <a href="historia.php">Historia</a>
                    <a href="discografia.php">Discografía</a>
                    <a href="tienda.php">Tienda</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>

        </div>

    </header>
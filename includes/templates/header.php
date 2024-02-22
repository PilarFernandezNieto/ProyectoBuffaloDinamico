<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION["login"] ?? false;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Electric Buffalo</title>
    <meta name="description" content="The Electric Buffalo es una banda de rock asturiana que te llevará en un viaje musical emocionante con la seña de identidad de &quot;lo americano&quot;. Únete a la manada.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Electric Buffalo" />
    <meta property="og:description" content="Descubre el potente sonido de la banda de rock asturiana The Electric Buffalo. Rock clásico con influencias americanas y energía contemporánea." />
    <meta property="og:url" content="https://www.theelectricbuffalo.com" />

    <link rel="icon" type="image/x-icon" href="build/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/app.css.map">
    <script src="build/js/jquery-3.7.1.min.js"></script>

    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/e79408189430261e22a99565d6b38640.js"></script> -->
</head>
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-QB6GV2DF3D"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QB6GV2DF3D');
</script> -->

<body>

    <body>
        <header class="header">


            <div class="contenedor contenido-header">

                <a href="index.php"><img src="/build/img/logoBuf.png" alt="Logo Bufalo" class="img-fluid"></a>
                <p class="menu-mobile"><i class="fa-solid fa-bars"></i></p>
                <div class="header-derecha">
                    <div class="redes-sociales">
                        <?php if(!$auth) { ?>
                            <a href="login.php" class="fs-3 me-5">Inicia sesión</a>
                        <?php } else { ?>
                            <a href="/admin" class="fs-3 me-5">Admin</a>
                            <a href="logout.php" class="fs-3 me-5">Cierra sesión</a>
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
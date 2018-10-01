<?php

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SaveInfo</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <link href="Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="Public/css/grayscale.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SaveInfo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#hace">Que hacemos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#info">Informes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contac">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">SaveInfo</h1>
            <h2 class="text-blue-50 mx-auto mt-2 mb-5">La nueva manera de guardar tu información</h2>
            <a href="#modal_sesion" class="btn btn-primary js-scroll-trigger" id="sesion">Iniciar Sesión</a>
        </div>
    </div>
</header>

        <body>

        <main>
        <?php
    }

    public static function footer()
    {
        ?>
        </main>
        </body>
        <footer class="bg-black small text-center text-white-50">
    <div class="container">
        Todos los derechos reservados SaveInfo TESVB 2018
    </div>
</footer>

    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="Public/vendor/jquery/jquery.min.js"></script>
    <script src="Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="Public/js/grayscale.min.js"></script>
        <!------------------------------------------------------------>

        </html>
        <?php
    }
}


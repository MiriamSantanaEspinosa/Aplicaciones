<?php
namespace Views;
new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/bootstrap-reboot.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <link rel="stylesheet" href="<?php echo URL?>/dist/css/bootstrap.min.css">
            <link href="<?php echo URL?>/Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/grayscale.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/Style2.css">






            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/jquery.min.js"></script>
            <script src="<?php echo URL?>/dist/js/jquery.js"></script>
            <script src="<?php echo URL?>/dist/js/bootstrap.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?php echo URL?>/Public/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="<?php echo URL?>/Public/js/grayscale.min.js"></script>
    </head>

    <body>
        <main>

            <title>SaveInfo</title>
            <nav class=" bg navbar navbar-expand-lg navbar-light bg-info fixed-top text-white"  >
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger text-white" href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger " id="sesion ">SAVEINFO</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="#hace">Que hacemos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="#info">Quienes somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger text-white" href="#contac">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </main>
        <!------------------------------------------------------------>
        </html>
        <?php
    }
    public function footer(){
        ?>
        <footer class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-bottom">
                <div class="container">
                    <p class="  text-white">Todos los derechos reservados SaveInfo TESVB 2018</p>
                </div>
            </nav>

        </footer>

        </body>
        <?php

}
}


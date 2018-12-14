<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13/10/2018
 * Time: 09:39 PM
 */
?>
<div id="logo">
    <div class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center" >
                <h1 class="mx-auto my-0 text-uppercase">SaveInfo</h1>
                <h2 class="text-capitalize text-white mx-auto mt-2 mb-5">La nueva manera de guardar tu información</h2>

                <div class="nav-wrapper cyan lighten-2">
                    <?php if(!isset($_SESSION["username"]))
                    {?>
                    <div class="container">
                        <a  href="<?php echo URL?>login" class="btn btn-primary js-scroll-trigger" id="sesion" >Iniciar Sesión</a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
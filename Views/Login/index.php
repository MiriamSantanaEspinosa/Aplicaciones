<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 03/10/2018
 * Time: 11:30 AM
 */
?>

<center>
<form class="container ">

    <div class="container center">
        <div>
            <h5 class="red-text">
                <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
            </h5>
        </div>
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

            <form class="col s12" method="post" action="Login/verify">
                <div class='row'>
                    <div class='col s12'>
                        <h5 class="black-text ">Por favor, inicia sesión en tu cuenta</h5><br>
                        <center>
                        <div class="container">

                            <input type="text" placeholder="Introduce Usuario" name="uname" >
                        </div>

                        <br>
                        <div class="container">

                            <input type="password" placeholder="Introduce Contraseña" name="psw" >
                        </div>

                        <br>
                        <br>

                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Entrar</button>
                            <button type="button" class="cancelbtn">Cancel</button>
                        </div>

                        </center>
                    </div>
                </div>

            </form>
        </div>
    </div>
</form>
</center>

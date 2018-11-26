<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/10/2018
 * Time: 07:58 AM
 */

namespace AppData\Controller;

class loginController
{
    private $login;

    public function __construct()
    {
        $this->login= new \AppData\Model\login();
    }

    public function index()
    {
        //session_destroy();
    }

    public function verify()
    {
        $_SESSION["error_login"]="";

        if(isset($_POST)) {
            $this->login->set("nickname", $_POST["nickname"]);
            $this->login->set("pass", $_POST["pass"]);
            $datos = $this->login->Verify();
            if (mysqli_num_rows($datos) > 0) {
                $datos=mysqli_fetch_assoc($datos);
                $_SESSION["nickname"]=$datos["pass"];
                header("Location:" . URL . "base");

            }
            else {
                $_SESSION["error_login"] = "Nombre de usuario o Contraseña incorrectos";
                header("Location:" . URL . "login");
            }
        }
    }

    public function logout(){
        session_destroy();
    }
}


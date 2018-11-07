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
        $this->login= new \AppData\Model\Login();
    }

    public function index()
    {
        //session_destroy();
    }
    public function verify()
    {
        if(isset($_POST)) {
            $this->login->set("usuario", $_POST["usuario"]);
            $this->login->set("contraseña", $_POST["contraseña"]);
            $datos = $this->login->verify();
            if (mysqli_num_rows($datos) > 0) {
                $datos=mysqli_fetch_assoc($datos);
                $_SESSION["nombre"]=$datos["nombre"] . " " . $datos["ap_p"] . " " . $datos["ap_m"];
                $_SESSION["id_tipo_usuario"]=$datos['id_tipo_usuario'];
            } else {
                $_SESSION["error_login"] = "los datos no coinciden con nuestros registros";
            } ?>
            <script type="text/javascript">
                window.location.href = "<?php echo URL?>";
            </script>
            <?php
        }
    }
    public function logout()
    {
        session_destroy();
        // header("Location:".URL);
    }

    public function registrar(){
        $datos[0]=$this->login->getSex();
        $datos[1]=$this->login->getTiUs();
        return $datos;
    }

    public function guarda(){
        if(isset($_POST)){
            $this->login->set("nombre",$_POST['nombre']);
            $this->login->set("ap_p",$_POST['ap_p']);
            $this->login->set("ap_m",$_POST['ap_m']);
            $this->login->set("edad",$_POST['edad']);
            $this->login->set("id_sexo",$_POST['id_sexo']);
            $this->login->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
            $this->login->set("nickname",$_POST['nickname']);
            $this->login->set("contraseña",$_POST['contraseña']);
            $this->login->guardar();
            $dato=$this->login->getOne();
            if (mysqli_num_rows($dato) > 0) { ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                        swal({
                            title : " ",
                            text : "\nGuardado correctamente",
                            closeOnCancel :  false,
                            closeOnConfirm : false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer : 2000
                        });
                        setTimeout(function(){
                            window.location.href = "<?php echo URL?>login";
                        },2100)
                    })
                </script>
                <?php
            }
        }
    }


}


<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 16/10/2018
 * Time: 10:37 PM
 */

namespace AppData\Controller;

class registrarController
{
    private $registrar;

    public function __construct()
    {
        $this->registrar= new \AppData\Model\registrar();
    }

    public function index(){
        $datos1=$this->registrar->getAll();

        $datos["registrar"]=$datos1;

        return $datos;
    }

    public function crear(){

        if(isset($_POST))
        {
            $this->registrar->set('nombre', $_POST["nombre"]);
            $this->registrar->set('ap_paterno' , $_POST["ap_paterno"]);
            $this->registrar->set('ap_materno' , $_POST["ap_materno"]);
            $this->registrar->set('id_usuario' , $_POST["id_usuario"]);
            $this->registrar->set('edad' , $_POST["edad"]);
            $this->registrar->set('id_sexo' , $_POST["id_sexo"]);
            $this->registrar->add();
            $datos1=$this->servicio->getAll();
            $datos["registrar"]=$datos1;
            return $datos;
        }
    }

    public function guardar(){
        if(isset($_POST)) {
            $this->registrar->set('nombre', $_POST["nombre"]);
            $this->registrar->set('ap_paterno', $_POST["ap_paterno"]);
            $this->registrar->set('ap_materno', $_POST["ap_materno"]);
            $this->registrar->set('id_usuario', $_POST["id_usuario"]);
            $this->registrar->set('edad', $_POST["edad"]);
            $this->registrar->set('id_sexo', $_POST["id_sexo"]);
            $this->registrar->guardar();
            $dato = $this->registrar->getOne();

            if (mysql_num_rows($dato) > 0 )  { ?>

                <script type ="text/javascript">

                    $(document).ready(function() {
                        swal({
                            title: " ",
                            text: "\nGuardado correctamente",
                            closeOnCancel: false,
                            closeOneConfirme: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        setTimeout(function () {
                            window.location.href = "<?php echo URL ?>login";
                        }, 2100)
                    }
            <?php }
        }
    }
}?>

//juankrlosg
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05/12/2018
 * Time: 12:06 PM
 */

namespace AppData\Controller;


class personasController
{
    private $Personas,$Sexos,$Tipos_usuarios,$Usuarios;


    public function __construct()
    {
        $this->Personas= new \AppData\Model\personas();
        $this->Sexos= new \AppData\Model\Sexos();
        $this->Tipos_usuarios= new \AppData\Model\Tipos_usuarios();
        $this->Usuarios= new \AppData\Model\Usuarios();
    }

    public function index()
    {
        $datos1=$this->Personas->getAll();
        $datos2=$this->Sexos->getAll();
        $datos3=$this->Tipos_usuarios->getAll();
        $datos4=$this->Usuarios->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$datos3;
        $datos[3]=$datos4;
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->Personas->set('nombre',$_POST["nombre"]);
            $this->Personas->set('ap_p',$_POST["ap_p"]);
            $this->Personas->set('ap_m',$_POST["ap_m"]);
            $this->Personas->set('id_usuario',$_POST["id_tipo_usuario"]);
            $this->Personas->set('edad',$_POST["edad"]);
            $this->Personas->set('id_sexo',$_POST["id_sexo"]);
            $this->Usuarios->set('nickname',$_POST["nickname"]);
            $this->Usuarios->set('pass',$_POST["pass"]);
            $this->Usuarios->set('id_usuario',$_POST["id_tipo_usuario"]);

            $this->Personas->add();
            $datos1=$this->Personas->getAll();
            $datos[0]=$datos1;

            $this->Usuarios->add();
            $datos4=$this->Usuarios->getAll();
            $datos[3]=$datos4;

            if (mysqli_num_rows($datos[0]) > 0 ) { ?>
                <script type="text/javascript">
                    swal("Registro exitoso", "", "success");
                    setTimeout(function(){
                        window.location.href = "<?php echo URL?>login";
                    },1000)
                </script>
                <?php
            }
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26/11/2018
 * Time: 07:19 PM
 */
namespace AppData\Controller;

class baseController
{
    private $contenido;
    private $Personas;
    private $archivos;


    public function __construct()
    {
        $this->contenido = new \AppData\Model\base();
        $this->Personas= new \AppData\Model\personas();
        $this->subidas= new \AppData\Model\subidas();
    }

    public function index()
    {
        $datos1=$this->Personas->getAll();
        $datos2=$this->subidas->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        return $datos;
    }

    public function print_pdf()
    {
        $datos=$this->contenido->getinfo();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->subidas->set('nombre_sub',$_POST["archivo"]);
            $this->subidas->set('id_persona',$_POST["id_persona"]);
            $this->subidas->set('fecha',$_POST["fecha"]);
            $this->subidas->set('hora',$_POST["hora"]);

            $this->subidas->add();
            $datos2=$this->subidas->getAll();
            $datos[1]=$datos2;


            if (mysqli_num_rows($datos[1]) > 0 ) { ?>
                <script type="text/javascript">
                    swal("Registro exitoso", "", "success");
                    setTimeout(function(){
                        window.location.href = "<?php echo URL?>base";
                    },1000)
                </script>
                <?php
            }
        }
    }


}
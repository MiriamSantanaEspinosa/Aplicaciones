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
    private $registrar,$sexos,$personas, $tipos_usu, $usuario;

    public function __construct()
    {
        $this->registrar = new \AppData\Model\registrar();
        $this->personas = new \AppData\Model\personas();
        $this->tipos_usu = new \AppData\Model\Tipos_usuarios();
        $this->usuario = new \AppData\Model\Usuarios();
    }

    public function index(){
        $datos[0]=$this->registrar->getSex();
        $datos[1]=$this->registrar->getTiUs();
        $datos[2]=$this->personas->getAll();
        $datos[4]=$this->tipos_usu->getAll();
        $datos[5]=$this->usuario->getAll();
        return $datos;
    }

    public function logout(){
        session_destroy();
    }

    public function guardar()
    {
        if(isset($_POST)){
            $this->personas->set("nombre",$_POST['nombre']);
            $this->personas->set("ap_p",$_POST['ap_p']);
            $this->personas->set("ap_m",$_POST['ap_m']);
            $this->personas->set("edad",$_POST['edad']);
            $this->personas->set("id_sexo",$_POST['id_sexo']);
            $this->usuario->set("nickname",$_POST['nickname']);
            $this->usuario->set("pass",$_POST['pass']);
            $this->usuario->set("id_tipo_usuario",$_POST['id_tipo_usuario']);

            $this->personas->add();
            $datos1=$this->personas->getAll();
            $datos[2]=$datos1;

            $this->usuario->add();
            $datos4=$this->usuario->getAll();
            $datos[5]=$datos4;

            //$datos["registra"]=$datos;
            return $datos;
        }
    }


}?>


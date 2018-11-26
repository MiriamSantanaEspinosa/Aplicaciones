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
        $this->registrar = new \AppData\Model\registrar();
    }

    public function index(){
        $datos[0]=$this->registrar->getSex();
        $datos[1]=$this->registrar->getTiUs();
        return $datos;
    }

    public function logout(){
        session_destroy();
    }

    public function guardar()
    {
        if(isset($_POST)){
            $this->registrar->set("nombre",$_POST['nombre']);
            $this->registrar->set("ap_p",$_POST['ap_p']);
            $this->registrar->set("ap_m",$_POST['ap_m']);
            $this->registrar->set("edad",$_POST['edad']);
            $this->registrar->set("id_sexo",$_POST['id_sexo']);
            $this->registrar->set("nickname",$_POST['nickname']);
            $this->registrar->set("pass",$_POST['pass']);
            $this->registrar->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
            $this->registrar->guarda();
            $datos=$this->registrar->getAll();
            //$datos["registra"]=$datos;
            return $datos;
        }
    }


}?>


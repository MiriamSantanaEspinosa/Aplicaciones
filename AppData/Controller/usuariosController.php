<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05/12/2018
 * Time: 12:06 PM
 */

namespace AppData\Controller;


class usuariosController
{
    private $Usuarios;

    public function __construct()
    {
        $this->Usuarios= new \AppData\Model\Usuarios();
    }

    public function index()
    {
        $datos[0]=$this->Usuarios->getAll();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->Usuarios->set('nickname',$_POST["nickname"]);
            $this->Usuarios->set('pass',$_POST["pass"]);

            $this->Usuarios->add();
            $datos1=$this->Usuarios->getAll();
            $datos[0]=$datos1;

            return $datos;
        }
    }


}
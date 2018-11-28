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


    public function __construct()
    {
        $this->contenido = new \AppData\Model\base();
    }

    public function index(){
        $datos1=$this->contenido->getinfo();
        $datos["contenido"]=$datos1;
        return $datos;
    }

    public function print_pdf()
    {
        $datos=$this->contenido->getinfo();
        return $datos;
    }
}
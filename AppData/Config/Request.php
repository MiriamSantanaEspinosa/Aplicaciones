<?php namespace AppData\Config;
class Request{
    private $Controlador;
    private $Metodo;
    private $Argumento;
    public function __construct(){
        if(isset($_GET['url'])){
            $ruta = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
            $ruta = explode("/",$ruta); //Se empieza a crear el array utilizando explode para delimitar y dividirlo en un array
            $ruta = array_filter($ruta);//Se crea otro filtro
            if($ruta[0]=="index.php" || $ruta[0]=="index")
                $this->Controlador="Login";
            else
                $this->Controlador = strtolower(array_shift($ruta));
            $this->Metodo = strtolower(array_shift($ruta));
            if(!$this->Metodo)
                $this->Metodo = "index";
            $this->Argumento = $ruta;
        }
        else{
            $this->Controlador="inicio";//Archivo llamado HomeController.php
            $this->Metodo="index";
        }
    }
    public function getControlador(){
        return $this->Controlador;
    }
    public function getMetodo(){
        return $this->Metodo;
    }
    public function getArgumento(){
        return $this->Argumento;
    }
}
?>
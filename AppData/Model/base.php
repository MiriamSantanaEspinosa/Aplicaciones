<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26/11/2018
 * Time: 07:18 PM
 */

namespace AppData\Model;


class base
{
    private $nombre, $pass, $nickname, $ap_p, $ap_m, $edad, $id_sexo, $id_tipo_usuario;

    public function __construct()
    {
        $this->conexion= new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function getinfo()
    {
        $sql="select personas.nombre, 
                     personas.ap_p,
                     personas.ap_m,  
                     descargas.nombre_archivo,
                     descargas.fecha,
                     descargas.hora 
              from descargas, personas, usuarios, tipos_usuarios 
              where descargas.id_persona = personas.id_persona 
              and personas.id_usuario = usuarios.id_usuario 
              and usuarios.id_tipo_usuario = tipos_usuarios.id_tipo_usuario";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;

    }

}


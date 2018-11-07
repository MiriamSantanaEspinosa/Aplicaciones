<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 16/10/2018
 * Time: 10:37 PM
 */

namespace AppData\Model;


class registrar
{
    private  $nombre;
    private  $ap_paterno;
    private  $ap_materno;
    private  $id_usuario;
    private  $edad;
    private  $id_sexo;

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

    function add()
    {
        $sql="insert into personas values('0','{$this->nombre}','{$this->ap_paterno}','{$this->ap_materno}','{$this->id_usuario}', '{$this->edad }'), '{$this->id_sexo }' )";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from personas order by  id_persona ASC";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }
}
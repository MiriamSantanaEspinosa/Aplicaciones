<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20/10/2018
 * Time: 08:46 PM
 */

namespace AppData\Model;


class Sexos
{
    private $id_sexo;
    private $descripcion;

    function __construct()
    {
        $this->conexion= new conexion();
    }

    function get($atributo)
    {
        return $this->$atributo;
    }

    function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    function add()
    {
        $sql="insert into sexos  values ('0','{$this->descripcion}')";
        $this->conexion ->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from sexos order by id_sexo ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM sexos WHERE id_sexo='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM sexos where id_sexo='{$id}}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update sexos set descripcion='{$this->descripcion}',
                where id_sexo='{$this->id_sexo}'";
        $this->conexion->QuerySimple($sql);
    }
}
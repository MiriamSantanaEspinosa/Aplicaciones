<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20/10/2018
 * Time: 08:49 PM
 */

namespace AppData\Model;


class Tipos_usuarios
{
    private $id_tipo_usuario;
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
        $sql="insert into tipos_usuarios  values ('0','{$this->descripcion}')";
        $this->conexion ->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from tipos_usuarios order by id_tipo_usuario ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM tipos_usuarios WHERE id_tipo_usuario='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM tipos_usuarios where id_tipo_usuario='{$id}}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update tipos_usuarios set descripcion='{$this->descripcion}',
                where id_tipo_usuario='{$this->id_tipo_usuario}'";
        $this->conexion->QuerySimple($sql);
    }
}
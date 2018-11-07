<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20/10/2018
 * Time: 08:35 PM
 */

namespace AppData\Model;


class Usuarios
{
    private $id_usuario;
    private $nickname;
    private $pass;
    private $id_tipo_usuario;

    function __construct()
    {
        $this->conexion=new conexion();
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
        $sql="insert into usuarios values('0','{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT usuarios.id_usuario, usuarios.nickname, usuarios.pass, tipos_usuarios.id_tipo_usuario
              FROM usuarios, tipos_usuarios 
              WHERE usuarios.id_tipo_usuario = tipos_usuarios.id_tipo_usuario 
              ORDER BY id_usuario ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from usuarios where id_usuario='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from usuarios where id_usuario='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){

        $sql="update usuarios set nickname='{$this->nickname}',
               pass='{$this->pass}', id_tipo_usuario='{$this->id_tipo_usuario}' ,
              where id_usuario='{$this->id_usuario}'";
        $this->conexion->QuerySimple($sql);
    }
}
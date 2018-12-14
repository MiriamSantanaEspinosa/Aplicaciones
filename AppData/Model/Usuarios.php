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
    private  $tabla="Usuarios";
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
        //$sql="insert into {$this->tabla} values('0','{$this->nickname}','{$this->pass}')";
        //$sql="insert into usuarios values('0','{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        //$sql="INSERT INTO `usuarios`(`id_usuario`, `nickname`, `pass`, `id_tipo_usuario`) VALUES ('0','{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        //$this->conexion->QuerySimple($sql);

        $sql="insert into {$this->tabla} values('0','{$this->nickname}','{$this->pass}','{$this->id_usuario}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from usuarios order by id_usuario ASC  ";
        $datos=$this->conexion->queryResultado($sql);
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

       // $sql="update usuarios set nickname='{$this->nickname}',
         //      pass='{$this->pass}', id_tipo_usuario='{$this->id_tipo_usuario}' ,
           //   where id_usuario='{$this->id_usuario}'";
        //$this->conexion->QuerySimple($sql);
    }
}
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
    private $nombre, $pass, $nickname, $ap_p, $ap_m, $edad, $id_sexo, $id_tipo_usuario;
    private  $ap_paterno;
    private  $ap_materno;
    private  $id_usuario;

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

    function getAll()
    {
        $sql="select * from usuarios order by  id_usuario ASC";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    public function getOne(){
        $sql="SELECT * FROM usuarios 
        WHERE nickname='{$this->nickname}' 
        AND pass='{$this->pass}' 
        ORDER BY id_clasificacionkilo ASC";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function getSex(){
        $sql="SELECT * FROM sexos";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function getTiUs(){
        $sql="SELECT * FROM tipos_usuarios";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function guarda() {
        $sql="INSERT INTO usuarios (nickname, pass, id_tipo_usuario) VALUES ('{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        //$sql="insert into usuarios values('0','{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        //$sql="INSERT INTO usuarios (id_usuario, nickname, pass, id_tipo_usuario) VALUES ('0',''{$this->nickname}','{$this->pass}','{$this->id_tipo_usuario}')";
        $this->conexion->QuerySimple($sql);
        //INSERT INTO `usuarios`(`id_usuario`, `nickname`, `pass`, `id_tipo_usuario`) VALUES (22,'lady','1234',21)
    }
}
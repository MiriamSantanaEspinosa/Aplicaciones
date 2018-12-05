<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/10/2018
 * Time: 07:59 AM
 */
namespace AppData\Model;
class login
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

    public function verify()
    {
        $sql="SELECT * FROM usuarios where nickname='{$this->nickname}' and pass='{$this->pass}'";
        //$sql = "SELECT usuarios.id_usuario, personas.nombre, personas.ap_p, personas.ap_m, usuarios.id_tipo_usuario FROM personas, usuarios, sexos, tipos_usuarios  where usuarios.nickname='{$this->nickname}' and usuarios.pass='{$this->pass}' and personas.id_usuario=usuarios.id_usuario and usuarios.id_tipo_usuario=tipos_usuarios.id_tipo_usuario and personas.id_sexo=sexos.id_sexo";
        //$sql = "select usuarios.nickname,pass from usuarios";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function getOne(){
        $sql="SELECT * FROM usuarios WHERE nickname='{$this->nickname}' AND pass='{$this->pass}'";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }




}
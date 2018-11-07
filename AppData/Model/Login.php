<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/10/2018
 * Time: 07:59 AM
 */

namespace AppData\Model;


class Login
{
    private $nombre, $contraseña, $nickname, $ap_p, $ap_m, $edad, $id_sexo, $id_tipo_usuario;
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
        $sql = "SELECT usuarios.id_usuario, personas.nombre, personas.ap_p, personas.ap_m, usuarios.id_tipo_usuario FROM personas, usuarios, sexos, tipos_usuarios  where usuarios.nickname='{$this->usuario}' and usuarios.password='{$this->contraseña}' and personas.id_usuario=usuarios.id_usuario and u.id_tipo_usuario=tu.id_tipo_usuario and personas.id_sexo=sexos.id_sexo";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function guardar() {
        $sql="INSERT INTO usuario (nickname, password, id_tipo_usuario) VALUES ('{$this->nickname}','{$this->contraseña}','{$this->id_tipo_usuario}')";
        $this->conexion->QuerySimple($sql);
        $sql="SELECT * FROM usuario WHERE nickname='{$this->nickname}' AND password='{$this->contraseña}'";
        $dato=$this->conexion->QueryResultado($sql);
        if (mysqli_num_rows($dato) > 0) {
            $datos=mysqli_fetch_assoc($dato);
        }
        if(isset($datos['id_usuario'])) {
            $sql="INSERT INTO persona(nombre, ap_p, ap_m, edad, id_sexo, id_usuario) VALUES ('{$this->nombre}','{$this->ap_p}','{$this->ap_m}','{$this->edad}','{$this->id_sexo}','{$datos['id_usuario']}')";
            $this->conexion->QuerySimple($sql);
            $_SESSION['id_usuario']=$datos['id_usuario'];
        }
    }

    public function insertaUsuario(){
        $sql="INSERT INTO personas(nombre, ap_p, ap_m,id_usuario, edad, id_sexo ) VALUES ('{$this->nombre}', '{$this->ap_p}', '{$this->ap_m}', '{$this->id_tipo_usuario}', '{$this->edad}', '{$this->id_sexo}')";
        $this->conexion->QuerySimple($sql);
    }

    public function getSex(){
        $sql="SELECT * FROM sexos";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    public function getTiUs(){
        $sql="SELECT * FROM tipos_usuarios";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

    public function getOne(){
        $sql="SELECT * FROM usuario WHERE nickname='{$this->nickname}' AND password='{$this->contraseña}'";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
}
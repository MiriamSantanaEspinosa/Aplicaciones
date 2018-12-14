<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 20/10/2018
 * Time: 08:16 PM
 */

namespace AppData\Model;


class personas
{
    private  $id_persona;
    private  $nombre;
    private  $ap_paterno;
    private  $ap_materno;
    private  $edad;
    private  $id_usuario;
    private  $id_sexo;

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
        //$sql="insert into personas values('0','{$this->nombre}','{$this->ap_paterno}','{$this->ap_materno}', '{$this->edad } ' ,'{$this->id_usuario}','{$this->id_sexo}')";
        $sql="insert into personas values('0','{$this->nombre}','{$this->ap_p}','{$this->ap_m}', '{$this->id_usuario } ' ,'{$this->edad}','{$this->id_sexo}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT personas.id_persona, personas.nombre, personas.ap_p, personas.ap_m,
              usuarios.id_usuario, personas.edad,  sexos.id_sexo
              FROM personas, usuarios, sexos 
              WHERE personas.id_usuario = usuarios.id_usuario 
              and personas.id_sexo = sexos.id_sexo
              ORDER BY id_persona ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from personas where id_persona='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from personas where id_persona='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){

        $sql="update personas set nombre='{$this->nombre}',
               ap_paterno='{$this->ap_paterno}', ap_materno='{$this->ap_materno}' ,
                 edad='{$this->edad}' , id_usuario='{$this->id_usuario}',
                   id_sexo='{$this->id_sexo}'where id_persona='{$this->id_persona}'";
        $this->conexion->QuerySimple($sql);
    }
}
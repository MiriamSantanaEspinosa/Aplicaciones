<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04/01/2019
 * Time: 09:50 PM
 */

namespace AppData\Model;


class subidas
{
    private $id_subida;
    private $nombre_sub;
    private $id_persona;
    private $fecha, $hora;

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
        $sql="insert into subidas  values ('0','{$this->nombre_sub}','{$this->id_persona}','{$this->fecha}','{$this->hora}')";
        $this->conexion ->QuerySimple($sql);
    }

    function getAll()
    {
        //$sql="SELECT subidas.id_subida, subidas.nombre_sub, personas.id_persona, subidas.fecha,
          //    subidas.hora
            //  FROM personas, subidas
              //WHERE subidas.id_persona = personas.id_persona
              
             // ORDER BY id_subida ASC ";
        //$datos=$this->conexion->QueryResultado($sql);
        //return $datos;
    }

    /*function getAll()
    {
        $sql="select * from subidas order by id_subida ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }*/

    function delete($id)
    {
        $sql="DELETE FROM subidas WHERE id_subida='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM subidas where id_subida='{$id}}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        //$sql = "update subidas set descripcion='{$this->descripcion}',
          //      where id_sexo='{$this->id_sexo}'";
        //$this->conexion->QuerySimple($sql);
    }
}
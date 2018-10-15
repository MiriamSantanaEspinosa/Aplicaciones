<?php namespace AppData\Model;

class conexion{
    private $datos=array("server"=>"localhost","user"=>"root", "password"=>"", "base"=>"saveinfo");
    private $conexion;

    function __construct()
    {
        $this->conexion=new  \mysqli($this->datos["server"], $this->datos["user"], $this->datos["password"]);
        $this->conexion->set_charset("utf8");
    }

    public function QuerySimple($sql){
        $this->cenexion->query($sql) or die (mysqli_error($this->conexion));
    }

    public function QueryResultado($sql){
        $datos=$this->cenexion->query($sql) or die (mysqli_error($this->cenexion));
        return $datos;
    }

    public function __destruct()
    {
        $this->cenexion->close();
    }
}


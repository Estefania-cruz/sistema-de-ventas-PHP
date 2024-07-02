<?php

require "../Config/Conexion.php";

class Permiso{

    public function __construct(){

    }

    public function listar(){
        $sql="SELECT * FROM permiso";
        return ejecutarConsulta($sql);
    }

}


?>
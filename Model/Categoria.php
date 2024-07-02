<?php

//conexion
require "../Config/Conexion.php";

class Categoria{

    //constructor
    public function __construct()
    {
        
    }
    //insertar
    public function insertar($nombre, $descripcion){
        $sql="INSERT INTO categoria (nombre, descripcion, condicion) VALUES ('$nombre','$descripcion','1')";
        return ejecutarConsulta($sql);
    }

    //editar
    public function editar($idcategoria,$nombre,$descripcion){
        $sql="UPDATE categoria SET nombre='$nombre', descripcion='$descripcion'
            WHERE   idcategoria='$idcategoria'";
                    return ejecutarConsulta($sql);

    }

    //desactivar
    public function desactivar($idcategoria){
        $sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
        return ejecutarConsulta($sql);
    }

    //activar

    public function activar($idcategoria){
        $sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
        return ejecutarConsulta($sql);
    }

    //mostrar
    public function mostrar($idcategoria){
        $sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //lista
    public function listar(){
        $sql="SELECT * FROM categoria";
        return ejecutarConsulta($sql);
    }

    //select
    public function select(){
        $sql="SELECT * FROM categoria WHERE condicion=1";
        return ejecutarConsulta($sql);
    }

}
?>
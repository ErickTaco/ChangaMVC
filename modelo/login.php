<?php

class login
{
    private $PDO;


    public function __construct()
    {
        #traemos la conexion echa
        require_once("../modelo/conexion.php");
        $con = new db();
        #entramos a la clase que creamos que es la conexion a la base de datos
        $this->PDO = $con->conexion();
    }


    public function login($Username, $Pass)
    {

        $stament = $this->PDO->prepare("Select * from `integrantes` where nombre='$Username' and contr='$Pass' ");
        $stament->execute();
        if ($stament->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
}

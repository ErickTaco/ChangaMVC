<?php
class EditarCarusel
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
    public function editarCarusel($idFoto)
    {
        $stament = $this->PDO->prepare("select id from colectivodeartespopulares where id='$idFoto' ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function guardarFoto($idFoto, $imagen)
    {
        $stament = $this->PDO->prepare("UPDATE colectivodeartespopulares SET carusel='$imagen' WHERE id='$idFoto' ");
        $stament->execute();
        if ($stament->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
}

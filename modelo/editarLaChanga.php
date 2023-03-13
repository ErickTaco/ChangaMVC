<?php
class EditarLaChanga
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

    public function editarLaChanga($historia, $imagen, $mision, $vision)
    {
        $stament = $this->PDO->prepare("UPDATE colectivodeartespopulares SET historia='$historia',imgHistoria='$imagen',Mision='$mision',Vision='$vision' WHERE id=1");
        return ($stament->execute()) ? $stament : true;
    }
}

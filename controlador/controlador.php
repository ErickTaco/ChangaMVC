<?php

$ac = new controlador();
$AC = $ac->acciones();

class controlador
{



    public function  acciones()
    {
        $accion = $_REQUEST['accion'];
        $respues = '';

        if ($accion != null) {
            switch ($accion) {

                case 'inicio':
                    header('location:../web/LaChanga.php');
                    break;
                case 'login':
                    $respues =  $this->login();
                    break;
                default:
            }
        } else {
        }
        return  $respues;
    }


    private $modelo;
    public function __construct()
    {
        require_once("../modelo/PaginaPrincipal");
        $this->modelo = new model();
    }

    public function MostrarInformacion()
    {
        return ($this->modelo->MostrarInformacion()) ? $this->modelo->MostrarInformacion() : false;
    }

    public function ActivarCarusel()
    {
        return ($this->modelo->ActivarCarusel()) ? $this->modelo->ActivarCarusel() : false;
    }
    public function MostrarCarusel()
    {
        return ($this->modelo->MostrarCarusel()) ? $this->modelo->MostrarCarusel() : false;
    }
    public function login()
    {
        require('../modelo/login.php');
        $res = '';
        $Login = new login();
        $usuario = trim($_POST['txtusuario']);
        $Passs = trim($_POST['txtclave']);
        $resultado = $Login->login($usuario, $Passs);
        if ($resultado) {
            $_SESSION['Username'] = $usuario;
            $res = require('../web/administracion.php');
        } else {
            $res = require('../web/login.php');
        }
    }
}

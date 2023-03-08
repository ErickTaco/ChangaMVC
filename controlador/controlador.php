<?php
$ac = new controlador();
$ac->acciones();

class controlador
{



    public function  acciones()
    {
        $accion = $_REQUEST['accion'];
        $respues = '$accion';

        if ($accion != null) {
            switch ($accion) {

                case 'inicio':
                    header('location:../web/LaChanga.php');
                    break;
                case 'login':
                    $this->Login();
                    break;
                case 'salir':
                    $this->SalirSesion();
                default:
            }
        } else {
        }
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



    public function Login()
    {
        $res = '';
        require('../modelo/login.php');
        $Login = new login();
        $usuario = trim($_POST['txtusuario']);
        $Passs = trim($_POST['txtclave']);
        $resultado = $Login->login($usuario, $Passs);
        if ($resultado) {
            session_start();
            $_SESSION['Username'] = $usuario;
            header('location:../web/administracion.php');
        } else {
            header('location:../web/login.php');
        }
    }
    public function SalirSesion()
    {
        session_start();
        if (session_destroy()) {
            header('location:../web/login.php');
        }
    }
}

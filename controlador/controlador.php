<?php
$ac = new controlador();
$ac->acciones();

class controlador
{
    public function  acciones()
    {
        $accion = $_REQUEST['accion'];


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
                    break;
                case 'editarCarusel':
                    $this->EditarCarusel();
                    include('../web/seleccionImagen.php');
                    break;
                case 'GuardarFoto':
                    require('../web/seleccionImagen.php');
                    $this->guardarFoto();
                    break;
                case 'editarLaChanga':
                    $this->editarLaChanga();
                    break;
                default:
            }
        } else {
        }
    }

    private $modelo;
    private $editarCarusel;
    private $editarLaChanga;

    public function __construct()
    {
        require_once("../modelo/PaginaPrincipal");
        $this->modelo = new model();
        require_once('../modelo/editarCarusel.php');
        $this->editarCarusel = new EditarCarusel();
        require_once('../modelo/editarLaChanga.php');
        $this->editarLaChanga = new EditarLaChanga();
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
    public function EditarCarusel()
    {
        $IdFoto = $_REQUEST['IdFoto'];
        return ($this->editarCarusel->editarCarusel($IdFoto)) ? $this->editarCarusel->editarCarusel($IdFoto) : false;
    }
    public function guardarFoto()
    {

        $id = $_POST['IdFoto'];
        $imagen = $_FILES['fotoCarusel']['name'];
        $tipo = $_FILES['fotoCarusel']['type'];
        $temp  = $_FILES['fotoCarusel']['tmp_name'];
        $res = $this->editarCarusel->guardarFoto($id, $imagen);
        if ($res) {


            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        } else {
            move_uploaded_file($temp, '../img/' . $imagen);

            header('location:../index.php');
        }
    }
    public function editarLaChanga()
    {
        $historia = $_POST['txtHistoria'];
        $mision = $_POST['txtMision'];
        $vision = $_POST['txtVision'];
        $imagen = $_FILES['fotoHis']['name'];
        $tipo = $_FILES['fotoHis']['type'];
        $temp  = $_FILES['fotoHis']['tmp_name'];
        $res = $this->editarLaChanga->editarLaChanga($historia, $imagen, $mision, $vision);
        if ($res == true) {
            move_uploaded_file($temp, '../img/' . $imagen);

            header('location:../web/administracion.php');
        } else {
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
        }
    }
}

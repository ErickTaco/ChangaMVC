<?php


class controlador
{
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
}

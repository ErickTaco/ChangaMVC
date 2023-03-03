<?php


class controlador
{
    private $modelo;
    public function __construct()
    {
        require_once("./datos/PaginaPrincipal");
        $this->modelo = new modelo();
    }

    public function MostrarInformacion()
    {
        return ($this->modelo->MostrarInformacion()) ? $this->modelo->MostrarInformacion() : false;
    }
}

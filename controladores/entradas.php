<?php

class entradas extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Entradas';
        $this->vista->url = 'entradas/inicio';
        $this->setModelo('entradas');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosdetalle = $this->modelo->listardetalle();
        $this->vista->datoscate = $this->modelo->listarcategorias();
        $this->vista->render($this->vista->url); //llama a la vista
    }
}

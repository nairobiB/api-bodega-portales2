<?php

class productos extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Productos';
        $this->vista->url = 'productos/inicio';
        $this->vista->current = 'current';
        $this->vista->render($this->vista->url);
    }
}

<?php

class salidas extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Pagina de Salidas';
        $this->vista->url = 'salidas/inicio';
        $this->vista->render($this->vista->url);
    }
}

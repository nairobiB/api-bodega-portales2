<?php

class entradadetalle extends Controlador
{
    function __construct()
    {

        parent::__construct();
    }
    function inicio()
    {
        $this->vista->titulo = 'Agregar nuevo Registro';
        $this->vista->url = 'entradadetalle/inicio';
        $this->setModelo('entradas');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->datosdetalle = $this->modelo->listardetalle();
        $this->vista->datoscate = $this->modelo->listarcategorias();
        $this->vista->render($this->vista->url); //llama a la vista
    }
    function guardar()
    {
        try {
            $fecha = $_POST['fecha'];
            $prov = $_POST['prov'];
            $usuario = $_POST['usuario'];
            $this->setModelo('cargos');
            $this->modelo->agregar(["fecha" => $fecha, "prov" => $prov, "usuario" => $usuario]);
            header("Location: /cargos/", TRUE, 301);
            exit();
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

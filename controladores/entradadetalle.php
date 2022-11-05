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
            $proveedor = $_POST['proveedor'];
            $usuario = $_POST['usuario'];
            $this->setModelo('entradas');
            $this->modelo->guardar(["Fechaentrada" => $fecha, "IdProv" => $proveedor, "NomUsr" => $usuario]);
            echo json_encode(array('success' => 1, 'msj' => 'Registro guardado'));
        } catch (\Throwable $th) {
            echo json_encode(array('success' => 0, 'msj' => 'Error al guardar registro'));
        }
    }
}

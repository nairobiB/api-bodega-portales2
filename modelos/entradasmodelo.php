<?php

class entradasModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdCompra, Fechaentrada, IdProv, NomUsr, Estado from entradas";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $entrada = [
                    'IdCompra' => $f['IdCompra'],
                    'Fechaentrada' => $f['Fechaentrada'],
                    'IdProv' => $f['IdProv'],
                    'NomUsr' => $f['NomUsr'],
                ];
                array_push($lista, $entrada);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

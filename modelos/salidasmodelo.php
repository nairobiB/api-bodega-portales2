<?php

class salidasModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select Codsalida, FechaVenta, NomUsr from salida";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $salida = [
                    'Codsalida' => $f['Codsalida'],
                    'Fechaventa' => $f['FechaVenta'],
                    'NomUsr' => $f['NomUsr'],
                ];
                array_push($lista, $salida);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

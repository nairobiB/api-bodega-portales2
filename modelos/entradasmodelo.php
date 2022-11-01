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
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en 
            
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
    function listardetalle()
    {
        $lista2 = [];
        try {
            $sql2 = "select IdCompra, IdProd, Cantidad, Precio from detalleentrada";
            $datosdetalle = $this->db->conectar()->query($sql2);
            foreach ($datosdetalle as $f2) {
                $entradadetalle = [
                    'IdCompra' => $f2['IdCompra'],
                    'IdProd' => $f2['IdProd'],
                    'Cantidad' => $f2['Cantidad'],
                    'Precio' => $f2['Precio'],
                ];
                array_push($lista2, $entradadetalle);
            }
            return $lista2;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

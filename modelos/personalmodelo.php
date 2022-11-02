<?php

class personalModelo extends Modelo
{
    function __construct()
    {
        parent::__construct();
    }
    function listar()
    {
        $lista = [];
        try {
            $sql = "select IdPer, TelPer, NomPer, ApePer, DirPer, Email, Estado, fecha_nacimineto from personal";
            $datos = $this->db->conectar()->query($sql); //capturan los datos que resultan del pdo, llama a la conexion db que esta en modelo base
            foreach ($datos as $f) {
                $personal = [
                    'IdPer' => $f['IdPer'],
                    'TelPer' => $f['TelPer'],
                    'NomPer' => $f['NomPer'],
                    'ApePer' => $f['ApePer'],
                    'DirPer' => $f['DirPer'],
                    'Email' => $f['Email'],
                    'Estado' => $f['Estado'],
                    'fecha_nacimineto' => $f['fecha_nacimineto']
                ];
                array_push($lista, $personal);
            }
            return $lista;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

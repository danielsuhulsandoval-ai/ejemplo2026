<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentosModel extends Model
{
    protected $table            = 'departamentos';
    protected $primaryKey       = 'cod_depto';
    protected $allowedFields    = [
        'cod_depto',
        'nombre',
        'cod_region'
    ];

    /*Departamentos y regiones*/       

    public function obtenerDatos()
    {
        return $this->select('
                departamentos.cod_depto,
                departamentos.nombre_depto,
                regiones.cod_region,
                regiones.nombre AS nombre_region
            ')
            ->join(
                'regiones',
                'regiones.cod_region = departamentos.cod_region',
                'inner'
            )
            ->findAll();
    }
}

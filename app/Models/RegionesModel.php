<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionesModel extends Model
{
    protected $table            = 'regiones';
    protected $primaryKey       = 'cod_region';
    protected $allowedFields    = [
        'cod_region',
        'nombre',
        'descripcion'
    ];

    /*método para unir varias tablas (departamentos, regiones y municipios*/
    public function obtenerDatos()
    {
        return $this
            ->select('
                departamentos.cod_depto,
                departamentos.nombre_depto,
                regiones.nombre AS nombre_region,
                municipios.cod_muni,
                municipios.nombre_municipio
            ')
            ->join(
                'regiones',
                'departamentos.cod_region = regiones.cod_region',
                'inner'
            )
            ->join(
                'municipios',
                'departamentos.cod_depto = municipios.cod_depto',
                'inner'
            )
            ->findAll();
    }

}

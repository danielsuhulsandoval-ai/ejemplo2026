<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipiosModel extends Model
{
    protected $table            = 'municipios';
    protected $primaryKey       = 'cod_muni';
    protected $allowedFields    = [
        'cod_muni',
        'nombre_municipio',
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
                'departamentos',
                'municipios.cod_depto = departamentos.cod_depto',
                'inner'
            )
            ->join(
                'regiones',
                'departamentos.cod_region = regiones.cod_region',
                'inner'
            )
            ->findAll();
    }

}
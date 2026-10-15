<?php

namespace App\Models;

use CodeIgniter\Model;

class DeptosRegionesModel extends Model
{
    protected $table            = 'departamentos_regiones';
    protected $allowedFields    = [
        'cod_depto',
        'nombre_depto',
        'cod_region',
        'nombre_region'
    ];

}
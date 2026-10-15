<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanoModel extends Model
{
    protected $table            = 'ciudadanos';
    protected $primaryKey       = 'dpi';
    protected $allowedFields    = [
        'dpi',
        'nombre',
        'apellido',
        'direccion',
        'tel_casa',
        'tel_movil',
        'email',
        'fechanac',
        'cod_nivel_acad',
        'cod_muni',
        'contra'
    ];
    /*Metodo unir papi */
public function obtenerCiudanosNiveles(){
        return $this->select('
            ciudadanos.dpi, 
            ciudadanos.apellido,
            ciudadanos.nombre, 
            nivelesacademicos.nombre as nivel_academico_nombre
            ')
            ->join(
                'nivelesacademicos',
                'nivelesacademicos.cod_nivel_acad = ciudadanos.cod_nivel_acad',
                'inner'
            )
            ->findAll();
    }
}
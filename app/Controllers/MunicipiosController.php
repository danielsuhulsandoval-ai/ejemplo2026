<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;


class MunicipiosController extends BaseController
{
    public function obtenerDatos(){
        $municipio = new MunicipiosModel();
        $datos['datos'] = $municipio->obtenerDatos();
        return view('municipios', $datos);  
    }
   
}
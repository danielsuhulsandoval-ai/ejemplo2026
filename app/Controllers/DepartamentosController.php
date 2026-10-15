<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;
use App\Models\DeptosRegionesModel;

class DepartamentosController extends BaseController
{

    public function obtenerDatos(){
        $departamento = new DepartamentosModel();
        $datos['datos'] = $departamento->obtenerDatos();
        return view('departamentos', $datos);
    }
    

}
<?php

namespace App\Controllers;
use App\Models\CiudadanoModel;

class CiudadanoController extends BaseController
{

    public function index(){
        $ciudadano = new CiudadanoModel();
        $datos['datos']= $ciudadano-> obtenerCiudanosNiveles();
        return view('ciudadano', $datos);
    }
    

}
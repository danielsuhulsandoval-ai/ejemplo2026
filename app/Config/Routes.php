<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('regiones','RegionesController::index');
$routes->post('agregar_region','RegionesController::insertar');
$routes->get('eliminar/(:num)','RegionesController::eliminar/$1');
$routes->get('buscar/(:num)','RegionesController::buscar/$1');
$routes->post('modificar_region','RegionesController::modificar');
$routes->get('deptos','DepartamentosController::obtenerDatos');
$routes->get('muni','MunicipiosController::obtenerDatos');
$routes->get('ciudadanos','CiudadanoController::index');

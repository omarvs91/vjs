<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('clientes', 'Home::clientes');
$routes->get('clientes/(:any)', 'Home::clientes/$1');
$routes->post('clientes', 'Home::clientes');
$routes->post('clientes/(:any)', 'Home::clientes');
$routes->get('estado_comprobantes','Home::estado_comprobantes');
$routes->get('estado_comprobantes/(:any)','Home::estado_comprobantes/$1');
$routes->post('estado_comprobantes','Home::estado_comprobantes');
$routes->post('estado_comprobantes/(:any)','Home::estado_comprobantes');
$routes->get('metodo_pago','Home::metodo_pago');
$routes->get('metodo_pago/(:any)','Home::metodo_pago/$1');
$routes->post('metodo_pago','Home::metodo_pago');
$routes->post('metodo_pago/(:any)','Home::metodo_pago');
$routes->get('roles','Home::roles');
$routes->get('roles/(:any)','Home::roles/$1');
$routes->post('roles','Home::roles');
$routes->post('roles/(:any)','Home::roles');
$routes->get('servicios','Home::servicios');
$routes->get('servicios/(:any)','Home::servicios/$1');
$routes->post('servicios','Home::servicios');
$routes->post('servicios/(:any)','Home::servicios');
$routes->get('users','Home::users');
$routes->get('users/(:any)','Home::users/$1');
$routes->post('users','Home::users');
$routes->post('users/(:any)','Home::users');
$routes->get('locales','Home::locales');
$routes->get('locales/(:any)','Home::locales/$1');
$routes->post('locales','Home::locales');
$routes->post('locales/(:any)','Home::locales');
$routes->get('comprobantes','Home::comprobantes');
$routes->get('comprobantes/(:any)','Home::comprobantes/$1');
$routes->post('comprobantes','Home::comprobantes');
$routes->post('comprobantes/(:any)','Home::comprobantes');
$routes->get('registrar_comprobante','Home::registrar_comprobante');
$routes->get('fetchServicios','Home::fetchServicios');
$routes->get('fetchServicios/(:any)','Home::fetchServicios/$1');
$routes->post('fetchServicios','Home::fetchServicios');
$routes->post('fetchServicios/(:any)','Home::fetchServicios');
$routes->get('fetchServicioDetails','Home::fetchServicioDetails');
$routes->get('fetchServicioDetails/(:any)','Home::fetchServicioDetails/$1');
$routes->post('fetchServicioDetails','Home::fetchServicioDetails');
$routes->post('fetchServicioDetails/(:any)','Home::fetchServicioDetails');
$routes->get('fetchMetodoPago','Home::fetchMetodoPago');
$routes->get('fetchMetodoPago/(:any)','Home::fetchMetodoPago/$1');
$routes->post('fetchMetodoPago','Home::fetchMetodoPago');
$routes->post('fetchMetodoPago/(:any)','Home::fetchMetodoPago');
$routes->get('fetchClientes','Home::fetchClientes');
$routes->get('fetchClientes/(:any)','Home::fetchClientes/$1');
$routes->post('fetchClientes','Home::fetchClientes');
$routes->post('fetchClientes/(:any)','Home::fetchClientes');

$routes->get('logout','Auth::logout');
$routes->get('login', 'Auth::login');
$routes->post('authenticate', 'Auth::authenticate');
<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/sobrenos', 'Home::sobre');
$routes->get('/pevs', 'Home::pevs');
$routes->get('/planos', 'Home::planos');

$routes->get('/logout', 'UserController::logout');
$routes->match(['get', 'post'], '/login', 'UserController::index');
$routes->match(['get', 'post'], '/sign-up', 'UserController::signUp');
$routes->match(['get', 'post'], '/sign-up/dados', 'UserController::dados');

$routes->get('/empresas', 'EmpresaController::empresas');
$routes->get('/empresas/abrirtopico', 'EmpresaController::abrirTopico');
$routes->get('/empresas/editartopico', 'EmpresaController::editarTopico');
$routes->get('/empresas/topicos', 'EmpresaController::viewTopico');

$routes->get('/cooperativas', 'CoopController::cooperativas');
$routes->get('/cooperativas/pesquisartopicos', 'CoopController::pesquisartopicos');
$routes->get('/cooperativas/mostrarinteresse', 'CoopController::interesseTopico');
$routes->get('/cooperativas/pesquisarempresas', 'CoopController::pesquisarempresas');

$routes->get('/perfil', 'PerfilController::viewPerfil');
$routes->get('/editarperfil', 'PerfilController::editarPerfil');

$routes->get('/premium', 'PremiumController::premium');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

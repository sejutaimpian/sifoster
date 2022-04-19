<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('gabung/save', 'Gabung::index');
$routes->get('user', 'User::index', ['filter' => 'auth']);
$routes->get('admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('logout', 'Login::logout');
$routes->get('login', 'Login::index', ['filter' => 'noauth']);
$routes->delete('admin/(:num)', 'Admin::hapusakun/$1');
$routes->get('admin/hapuspelatih/(:num)', 'Admin::pelatih');
$routes->delete('admin/hapuspelatih/(:num)', 'Admin::hapuspelatih/$1');
$routes->get('admin/hapuskategori/(:num)', 'Admin::kategori');
$routes->delete('admin/hapuskategori/(:num)', 'Admin::hapuskategori/$1');

/*
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

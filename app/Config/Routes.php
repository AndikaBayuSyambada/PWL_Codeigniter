<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/main', 'Main::index');
$routes->get('/main/(:any)', 'Main::index/$1');
$routes->get('/', 'Home::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get("/home", "PagesController::index");
$routes->get("/about", "PagesController::about");
$routes->get("/contac", "PagesController::contac");

// karyawan
$routes->get('/karyawan', 'KaryawanController::index');
$routes->get('/karyawan/add', 'KaryawanController::add');
$routes->post('/karyawan/add', 'KaryawanController::save');
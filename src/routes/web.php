<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => 'render_template'
]));
$routes->add('bye', new Route('/bye', [
    '_controller' => 'render_template'
]));
$routes->add('leap_year', new Route('/is-leap-year/{year}', [
    'year' => null,
    '_controller' => 'App\Http\Controllers\LeapYearController::index'
]));

return $routes;

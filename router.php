<?php 

$routes = require BASE_PATH . '/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = str_replace(BASE_PATH, '', $uri);
$route = ($route === '' || $route === '/') ? '/' : rtrim($route, '/');

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) 
    {
        require BASE_PATH . $routes[$uri];
    }
    else {
        echo 'Eroare';
    }
}

routeToController($uri, $routes);
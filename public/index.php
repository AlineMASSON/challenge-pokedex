<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(    
    'GET',    
    '/',    
    [
        
        'action' => 'home',
        'controller' => '\Pokedex\Controllers\MainController'
    ],    
    'home'
);

$router->map(
    'GET',
    '/pokemon/[i:id]',
    [
        'action' => 'pokemon',
        'controller' => '\Pokedex\Controllers\MainController'
    ],
    'pokemon'
);

$router->map(
    'GET',
    '/types',
    [
        'action' => 'types',
        'controller' => '\Pokedex\Controllers\MainController'
    ],
    'types'
);

$router->map(
    'GET',
    '/type/[i:id]',
    [
        'action' => 'type',
        'controller' => '\Pokedex\Controllers\TypeController'
    ],
    'type'
);

$match = $router->match();

if ($match) {
    $methodToUse = $match['target']['action'];
    $cotrollerToUse = $match['target']['controller'];
    $controller = new $cotrollerToUse;
    $controller->$methodToUse($match['params']);
} else {
    exit('404 not found :(');
}
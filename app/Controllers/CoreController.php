<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;
use \Pokedex\Models\Type;
use \Pokedex\Models\Pokemon_type;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        global $router;

        $pokemon = new Pokemon();
        $pokemons = $pokemon->findAll();

        $type = new Type();
        $types = $type->findAll();
        
        $pokemonType = new Pokemon_type();
        $pokemonTypes = $pokemonType->findAll();


        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
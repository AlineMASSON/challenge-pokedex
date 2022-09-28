<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;
use \Pokedex\Models\Type;
use \Pokedex\Models\Pokemon_type;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('home');
    }

    public function pokemon($params)
    {
        $pokemonNum = $params['id'];
        
        $pokemonModel = new Pokemon();
        $pokemon = $pokemonModel->findType($pokemonNum);

        $this->show('pokemon', $pokemon);
    }

    public function types()
    {
        $this->show('types');
    }

}
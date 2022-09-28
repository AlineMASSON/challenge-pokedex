<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;
use \Pokedex\Models\Type;
use \Pokedex\Models\Pokemon_type;

class TypeController extends CoreController
{
    public function type($params)
    {
        $typeNum = $params['id'];
        
        $typeModel = new Type();
        $type = $typeModel->find($typeNum);

        $this->show('type', $type);
    }

}
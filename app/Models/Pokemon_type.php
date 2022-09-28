<?php

namespace Pokedex\Models;
use \Pokedex\Utils\Database;
use PDO;

class Pokemon_type extends CoreModel
{
    /**
     * Pokemon's number in the pokedex
     *
     * @var int
     */
    private $pokemon_number;

    /**
     * Id of the type
     *
     * @var int
     */
    private $type_id;

    /**
     * Get pokemon's number in the pokedex
     *
     * @return  int
     */ 
    public function getPokemon_number()
    {
        return $this->pokemon_number;
    }

    /**
     * Set pokemon's number in the pokedex
     *
     * @param  int  $pokemon_number  Pokemon's number in the pokedex
     *
     * @return  self
     */ 
    public function setPokemon_number(int $pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }

    /**
     * Get id of the type
     *
     * @return  int
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set id of the type
     *
     * @param  int  $type_id  Id of the type
     *
     * @return  self
     */ 
    public function setType_id(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    public function findAll()
    {
        $sql = '
            SELECT * FROM `pokemon_type`;
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon_type');

        return $results;
    }
}
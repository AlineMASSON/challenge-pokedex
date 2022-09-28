<?php

namespace Pokedex\Models;
use \Pokedex\Utils\Database;
use PDO;

class Type extends CoreModel
{
    /**
     * Name of the type
     *
     * @var string
     */
    private $name;

    /**
     * Name of the type
     *
     * @var string
     */
    private $color;

    /**
     * Get name of the type
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name of the type
     *
     * @param  string  $name  Name of the type
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name of the type
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set name of the type
     *
     * @param  string  $color  Name of the type
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    public function findAll()
    {
        $sql = '
            SELECT * FROM `type`;
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Type');

        return $results;
    }
    
    public function find($id)
    {
        $sql = '
            SELECT type.*, pokemon.name as pokemon_name, pokemon.number
            FROM `type`
        
            INNER JOIN pokemon_type
            ON pokemon_type.type_id = type.id

            INNER JOIN pokemon
            ON pokemon.number = pokemon_type.pokemon_number

            WHERE type.id  = ' . $id . ';
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'\Pokedex\Models\Type');

        return $results;
    } 
}
<?php

namespace Pokedex\Models;
use \Pokedex\Utils\Database;
use PDO;

class Pokemon extends CoreModel
{
    /**
     * Name of the type
     *
     * @var string
     */
    private $name;

    /**
     * Heal points
     *
     * @var int
     */
    private $hp;

    /**
     * Attack points
     *
     * @var int
     */
    private $attack;

    /**
     * Defense points
     *
     * @var int
     */
    private $defense;

    /**
     * Specific attack
     *
     * @var int
     */
    private $spe_attack;

    /**
     * Specific defense
     *
     * @var int
     */
    private $spe_defense;

    /**
     * Speed
     *
     * @var int
     */
    private $speed;

    /**
     * Pokemon's number in the pokedex
     *
     * @var int
     */
    private $number;


    /**
     * Get pokemon's number in the pokedex
     *
     * @return  int
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set pokemon's number in the pokedex
     *
     * @param  int  $number  Pokemon's number in the pokedex
     *
     * @return  self
     */ 
    public function setNumber(int $number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get speed
     *
     * @return  int
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set speed
     *
     * @param  int  $speed  Speed
     *
     * @return  self
     */ 
    public function setSpeed(int $speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get specific defense
     *
     * @return  int
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Set specific defense
     *
     * @param  int  $spe_defense  Specific defense
     *
     * @return  self
     */ 
    public function setSpe_defense(int $spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get specific attack
     *
     * @return  int
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Set specific attack
     *
     * @param  int  $spe_attack  Specific attack
     *
     * @return  self
     */ 
    public function setSpe_attack(int $spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get defense points
     *
     * @return  int
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set defense points
     *
     * @param  int  $defense  Defense points
     *
     * @return  self
     */ 
    public function setDefense(int $defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get attack points
     *
     * @return  int
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set attack points
     *
     * @param  int  $attack  Attack points
     *
     * @return  self
     */ 
    public function setAttack(int $attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get heal points
     *
     * @return  int
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set heal points
     *
     * @param  int  $hp  Heal points
     *
     * @return  self
     */ 
    public function setHp(int $hp)
    {
        $this->hp = $hp;

        return $this;
    }

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

    public function findAll()
    {
        $sql = '
            SELECT * FROM `pokemon`;
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

        return $results;
    }

    public function find(int $id)
    {
        $sql = '
            SELECT * FROM `pokemon` WHERE number = ' . $id . ';
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject('\Pokedex\Models\Pokemon');

        return $results;
    }

    public function findType(int $id)
    {
        $sql = '
            
            SELECT pokemon.*, type.name as type, type.color, type.id as type_id
            FROM `pokemon`
        
            INNER JOIN pokemon_type
            ON pokemon.number = pokemon_type.pokemon_number

            INNER JOIN type
            ON pokemon_type.type_id = type.id
            
            WHERE pokemon.number = ' . $id . ';
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'\Pokedex\Models\Pokemon');

        return $results;
    }

}
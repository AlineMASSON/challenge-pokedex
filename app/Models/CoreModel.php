<?php

namespace Pokedex\Models;
use \Pokedex\Utils\Database;
use PDO;

class CoreModel
{
    /**
     * ID of the type
     *
     * @var int
     */
    protected $id;
    

    /**
     * Get iD of the type
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iD of the type
     *
     * @param  int  $id  ID of the type
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
}
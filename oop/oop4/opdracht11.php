<?php

class movie
{
    public $name;

    public $genre;

    public $seen;


    /**
     * @param string $name 
     * @param string $genre
     * @param int $seen
     */

    public function __construct(string $name, string $genre, int $seen){
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen;
    }


    public function getname()
    {
        return $this->name;
    }
}

?>
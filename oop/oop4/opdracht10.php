<?php

class movie
{
    public string $name;

    public string $genre;

    public int $seen;


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
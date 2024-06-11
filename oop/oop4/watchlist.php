<?php

class watchlist
{
    public array $movies = [];

    public function addmovie(movie $movie)
    {
        $this->movies[] = $movie;
    }

}

?>
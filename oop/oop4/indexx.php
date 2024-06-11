<?php
declare(strict_types=1);

require_once "opdracht12.php";
require_once "watchlist.php";

$watchlist = new watchlist();

$movie1 = new movie('film', 'Thriller', 5);
$movie2 = new movie('film2', 'Horror', 3);

$watchlist->addmovie($movie1);
$watchlist->addmovie($movie2);

echo $movie1->getname();
echo "<br>";
echo var_dump($movie1);
echo "<br>";
echo $movie2->getname();
echo "<br>";
echo var_dump($movie2);
?>
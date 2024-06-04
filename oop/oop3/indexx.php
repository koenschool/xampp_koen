<?php
require_once "opdracht9.php";

$movie1 = new movie('The Joker', ['Thriller', 'sf'], 5);

echo $movie1->getname();
echo "<br>";
echo var_dump($movie1);
?>
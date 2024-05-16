<?php

class product
{
    public $name;

    public $price;

    public function formatprice()
    {
        return number_format($this->price, 2);
    }

}

$game1 = new product();
$game1->name = "Fifa 21";
$game1->price = 59.99;

$game2 = new product();
$game2->name = "Call of Duty";
$game2->price = 69.99;

echo $game1->formatprice(). "<br>";
echo $game1->name. "<br>";
echo $game1->price. "<br>";

var_dump($game1);
var_dump($game2);

?>
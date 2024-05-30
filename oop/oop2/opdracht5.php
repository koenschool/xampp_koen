<?php

class product
{
    public $name;

    public $price;


    public function __construct($name, $price){
        $this->name =ucfirst($name);
        $this->price = $price;
    }



    public function formatprice()
    {
        return number_format($this->price, 2);
    }

}

$game1 = new product("fifa 21", 59.99);


$game2 = new product("Call of Duty", 69.99);


echo $game1->formatprice(). "<br>";
echo $game1->name. "<br>";
echo $game1->price. "<br>";

var_dump($game1);
var_dump($game2);

?>
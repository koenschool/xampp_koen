<?php

class product
{
    public $name;

    public $price;

    public $currency;

    public function __construct($price, $name = "een spel", $currency = "€"){
        $this->name =ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }



    public function formatprice()
    {
        return number_format($this->price, 2);
    }

}

$game1 = new product(59.99, "fifa 21", currency: "$");
// "fifa 21",

// $game2 = new product("Call of Duty", 69.99);


// echo $game1->formatprice(). "<br>";
echo $game1->name. "<br>";
echo $game1->currency ;
echo $game1->price. "<br>";

var_dump($game1);
// var_dump($game2);

?>
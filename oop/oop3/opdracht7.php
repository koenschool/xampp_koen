<?php

class product
{


    public function __construct(public $price, public $name = "een spel", public $currency = "€"){
        
        $this->name =ucfirst($name);

    }



    public function formatprice()
    {
        return number_format($this->price, 2);
    }

}

$game1 = new product(59.99, "fifa 21", "$");
// "fifa 21",

// $game2 = new product("Call of Duty", 69.99);


// echo $game1->formatprice(). "<br>";
echo $game1->name. "<br>";
echo $game1->currency ;
echo $game1->price. "<br>";

var_dump($game1);
// var_dump($game2);

?>
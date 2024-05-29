<?php

class Fruit
{
    public $name;
    public $color;
    public $expirydate;
    private $prijs;
    
    public function __construct($naam, $kleur)
    {
        echo "Object fruit is aangemaakt";
        $this->name = $naam;
        $this->color = $kleur;
    }

    public function set_prijs($prijs)
    {
        $this->prijs = $prijs;
    }

    public function getprice($prijs) : float
    {
        return $this->price;
    }

    public function isexpired() : bool
    {

        if($this->expirydate < date("Y-m-d"))
        {
            $this->expirydate = true;
            return $this->expirydate;
        }
        else if($this->expirydate > date("Y-m-d"))
        {
            $this->expirydate = false;
            return $this->expirydate;
        }
    }

}

$apple = new Fruit("apple", "red");
$citrone = new Fruit("citrone", "yellow");

$apple->expirydate = "2022-12-31";
$citrone->expirydate = "2021-12-31";

$apple->set_prijs(0.50);
$apple->isexpired();


$citrone->set_prijs(0.50);
$citrone->isexpired();

echo "<br>";
var_dump($apple);
echo "<br>";
var_dump($citrone);

// echo "<br> $apple->name $apple->color $apple->expirydate";
// echo "<br> $citrone->name $citrone->color $citrone->expirydate";


?>
<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Het dier is geboren\n";
    }

    public function Info() {
        echo "Naam: " . $this->name . "\n";
    }

    public function Eat() {
        echo "Het beest eet\n";
    }

    public function Sleep() {
        echo "Het beest slaapt\n";
    }
}

// Maak een nieuw object aan
$animal = new Animal("Leo");

// Roep de methodes aan
$animal->Info();
$animal->Eat();
$animal->Sleep();
?>
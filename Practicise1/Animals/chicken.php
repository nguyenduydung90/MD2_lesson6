<?php
include_once (dirname(__FILE__).'/../AbstractClass/animal.php');
include_once (dirname(__FILE__).'/../InterfaceClass/edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
     return "chicken: cluck - cluck";
     // TODO: Implement makeSound() method.
    }
    public function howEat()
    {
        return "could be fried";
        // TODO: Implement howEat() method.
    }
}
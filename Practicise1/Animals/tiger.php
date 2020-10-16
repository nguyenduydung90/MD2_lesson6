<?php
include_once (dirname(__FILE__).'/../AbstractClass/animal.php');
class Tiger extends Animal{
    public function makeSound()
    {
        return "Tiger: roarrrr";
        // TODO: Implement makeSound() method.
    }
}
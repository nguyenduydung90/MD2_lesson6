<?php
include_once (dirname(__FILE__).'/../AbstractClass/fruits.php');
class Orange extends Fruit{
    public function howEat()
    {
        return 'Orange could be juiced';
        // TODO: Implement howEat() method.
    }
}
<?php


class CircleEx1 implements Resizeable
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->name=$name;
        $this->radius = $radius;
    }
    function resize($number)
    {
        return $this->radius=$this->radius*$number/100;
        // TODO: Implement resize() method.
    }
    function getRadius(){
         return $this->radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }


}

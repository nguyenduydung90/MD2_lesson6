<?php


class Shapes
{
public $name;
public function __construct($name)
{
    $this->name=$name;
}
public function show(){
    echo "I'm a $this->name";
}
}
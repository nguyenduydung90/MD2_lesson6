<?php


class Squares  extends Rectangles implements Resizeable
{
  public function __construct($width,$height=0)
  {
      parent::__construct($width,$height);
  }


    function resize($number)
    {
        return $this->width=$this->width*$number/100;
        // TODO: Implement resize() method.
    }
    function calculateArea()
    {
        return pow($this->width,2);
    }
}
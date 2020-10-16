<?php


class Rectangles implements Resizeable
{
    public $width;
    public $height;
public function __construct($width,$height)
{
    $this->width=$width;
    $this->height=$height;
}
    function resize($doublePercent)
    {
        $this->width+=$this->width*$doublePercent/100;
        $this->height+=$this->height*$doublePercent/100;
        return $this->width.$this->height;
        // TODO: Implement resize() method.
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }



}
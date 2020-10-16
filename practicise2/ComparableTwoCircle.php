<?php

class ComparableTwoCircle extends Circle implements ComparableTwo
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function comparaTo($circlOne)
    {
        $circleotherRadius = $circleother->getRadius();
        if ($this->getRadius() > $circleotherRadius) {
            return 1;
        } else if ($this->getRadius() < $circleotherRadius) {
            return -1;
        } else {
            return 0;
        }
        // TODO: Implement comparaTo() method.
    }
}
<?php



class CircleComparator extends Circle implements ComparableTwo
{

    public function comparaTo($circleOne,$circleTwo)
    {
        $radiusOne=$circleOne->getRadius();
        $radiusTwo=$circleTwo->getRadius();
        if($radiusOne>$radiusTwo){
            return 1;
        }else if($radiusOne<$radiusTwo){
            return -1;
        }else{
            return 0;
        }
        // TODO: Implement comparaTo() method.
    }
}
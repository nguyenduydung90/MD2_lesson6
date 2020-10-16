<?php
include_once 'ComparableTwo.php';
include_once 'Circle.php';
include_once 'CircleComparator.php';
$circleOne=new Circle('CircleOne',8);
$circleTwo=new Circle('CircleTwo',2);
$circleComparator=new CircleComparator();
var_dump($circleComparator->comparaTo($circleOne,$circleTwo));
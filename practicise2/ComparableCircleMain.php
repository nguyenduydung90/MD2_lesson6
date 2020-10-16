<?php
include 'ComparableTwoCircle.php';
$circleone=new ComparableTwoCircle('circleone',8);
$circletwo=new ComparableTwoCircle('circletwo',2);

var_dump($circleone->comparaTo($circletwo));
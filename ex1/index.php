<?php
include_once 'Resizeable.php';

include_once 'CircleEx1.php';
include_once 'Rectangles.php';
include_once 'Squares.php';
$circle1=new CircleEx1('circle1',100);
$circle1->resize(5);
echo 'Diện tích hình tròn là: '.$circle1->calculateArea().'<br>';

$rec1=new Rectangles(2,3);
$rec1->resize(5);
echo 'Diện tích hình chữ nhật là: '.$rec1->calculateArea().'<br>';

$square=new Squares(2);
$square->resize(5);
echo 'Diện tích hình vuông là: '.$square->calculateArea();
//$rec=new Rectangles(2,3);
//echo $rec->calculateArea();

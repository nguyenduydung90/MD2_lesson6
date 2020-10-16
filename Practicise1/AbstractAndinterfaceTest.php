<?php
include ('Animals/chicken.php');
include ('Animals/tiger.php');
include ('Fruits/apple.php');
include ('Fruits/orange.php');

echo ('-----Animals<br>');
$animals[0]=new Tiger();
$animals[1]=new Chicken();

foreach ($animals as $value){
    echo $value->makeSound().'<br>';
    if ($value instanceof Chicken){
        echo $value->howEat().'<br>';
    }
}

echo ('______Fruits<br>');

$fruit[0]=new Apple();
$fruit[1]=new Orange();

foreach ($fruit as $value){
    echo $value->howEat().'<br>';
}
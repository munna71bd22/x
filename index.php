<?php
echo 'working';

$f = 3;

$cars = Feature::getCar();
echo count($cars) > 0 ? $cars[0] : 'n/a';
$x = 2;


//another
?>
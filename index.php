<?php
echo 'working';
$cars = Feature::getCar();
echo count($cars) > 0 ? $cars[0] : 'n/a';
$x = 0;


?>
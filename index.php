<?php

require "Bicycle.php";
require "Car.php";

$bike = new Bicycle("blue");



echo $bike->forward();
echo $bike->brake();
echo $bike->brake();

$car = new Car("red", 4, "diesel");
$car->startCar();
echo $car->forward();
echo $car->brake();
echo $car->brake();

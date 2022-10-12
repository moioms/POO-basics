<?php

require "Vehicle.php";

$car = new Car('green', 4, 'electric');
$cycle = new Bicycle("red", 1);
$truck = new Truck(30, "gray", 3, "essence");
var_dump($truck);
echo $truck->availablity(60, 20);




echo $car->forward();



$cycle->forward();
echo $cycle->brake();
echo $cycle->brake();

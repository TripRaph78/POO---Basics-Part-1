<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(10);
echo '<br> Bicycle speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
// Moving bike
echo $bike->forward();
echo '<br> Bicycle speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bicycle speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$car1 = new Car('blue','2','Gasoline');
$car2 = new Car('black','4', 'Diesel');

//Engine off
echo $car1->forward();
echo '<br> Car speed : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
//Start engine
$car1->start(true);
echo $car1->forward();
echo '<br> Car speed : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Car drives with . $car1->getEnergy();

<?php

include_once('car.php');

//$car = new Car();

//echo $car->HelloCar();

$myCar = new Car("Skoda", "Fabia", "silver", 5);
$otherCar = new Car("FSO", "Polonez", "marine", 5);

echo $myCar->helloCar()."\n";
echo $otherCar->helloCar()."\n";

echo $otherCar->getColor()."\n";
$otherCar->setColor("pink");
echo $otherCar->helloCar()."\n";

echo introduceCar($myCar)."\n";


$raceCar = new RaceCar("Ferrari", "Enzo", "silver", 5, 100);

echo $raceCar->getHP()."\n";
echo $raceCar->helloCar()."\n";
?>

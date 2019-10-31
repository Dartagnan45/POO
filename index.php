<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue',1);

var_dump($bike);

//$bike->color = "blue";
//$bike->currentSpeed = 0;
//var_dump($bike); // then, another dump.

$bike->setCurrentSpeed(30);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setcurrentSpeed(10) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';

var_dump($bike);


$mustang = new Car("rouge",4, 'fuel');

var_dump($mustang);
var_dump(Car::ALLOWED_ENERGIES);

$mustang->setNbWheels(4);
echo '<p> la voiture possède ' . $mustang->getNbWheels(). ' roues et roule au '. $mustang->getEnergy(). '</p>';
echo $mustang->forward();
$mustang->setCurrentSpeed(100);
echo '<p> Vitesse de la voiture est de : ' . $mustang->getCurrentSpeed() . ' km/h' . '</p>';
echo '<p> La couleur de la voiture est : ' . $mustang->getColor()  . '</p>';
echo $mustang->brake();
echo '<br>';
echo '<p> Vitesse de la voiture : ' . $mustang->getcurrentSpeed() . ' km/h' . '</p>';


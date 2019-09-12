<?php


require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle('blue');

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
$bike->dump();

$mustang = new Car("rouge",4, 'essence');

var_dump($mustang);

echo '<p> la voiture possède ' . $mustang->getNbWheels(). ' roues et roule à l\''. $mustang->getEnergy(). '</p>';
echo $mustang->forward();
$mustang->setCurrentSpeed(200);
echo '<p> Vitesse de la voiture est de : ' . $mustang->getCurrentSpeed() . ' km/h' . '</p>';
echo '<p> La couleur de la voiture est : ' . $mustang->getColor()  . '</p>';
echo $mustang->brake();
echo '<br>';
echo '<p> Vitesse de la voiture : ' . $mustang->getcurrentSpeed() . ' km/h' . '</p>';
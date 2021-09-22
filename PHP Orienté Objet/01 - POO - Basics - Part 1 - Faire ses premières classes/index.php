<?php

require_once 'car.php';
require_once 'bike.php';

$bike = new Bicycle('green');
var_dump($bike);

$bike->setCurrentSpeed(12);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

$canyonera = new Car('red', 5, 'Gazoil');
var_dump($canyonera);

$canyonera->setCurrentSpeed(140);

echo $canyonera->forward();
echo '<br> Vitesse de la bagnole : ' . $canyonera->getCurrentSpeed() . 'km/h' . '<br>';
echo $canyonera->brake();
echo '<br> Vitesse de la bagnole : ' . $canyonera->getCurrentSpeed() . 'km/h' . '<br>';
echo $canyonera->brake();
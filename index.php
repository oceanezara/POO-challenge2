<?php

require_once 'bicycle.php';
$bike = new Bicycle('blue', 24);

var_dump($bike);

echo '<br/>';
echo '<br/>';
echo '<br/>';

require_once 'car.php';
$car = new Car('green', 4, 'electric');
echo $car -> forward();

var_dump($car);

echo '<br/>';
echo '<br/>';
echo '<br/>';

var_dump(Car::ALLOWED_ENERGIES);

echo '<br/>';
echo '<br/>';
echo '<br/>';

require_once 'truck.php';
$truck = new Truck ('yellow', 2, 25);
$truck -> setLoading(25);
var_dump($truck);

echo '<br/>';

echo $truck -> loadLevel();

echo '<br/>';

$truck -> setLoading(20);
echo $truck -> loadLevel();


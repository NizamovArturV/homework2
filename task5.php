<?php

$city1 = 200; //километр шоссе — центр первого города,
$city1Radius = 50; // радиус города 1,
$city2 = 700;// километр шоссе — центр второго города,
$city2Radius = 100; // радиус второго города.

$speedInCity = 70;
$speedOutOfCity = 90;

$highwayLength = 1000;

$city1Start = $city1- $city1Radius;
$city1End = $city1 + $city1Radius;

$city2Start = $city2- $city2Radius;
$city2End = $city2 + $city2Radius;


$carPosition = 0;
$carNumber = 0;
$maxSpeed = 0;
$carPositionKm = 0;

for ($i=1; $i <= 10; $i++) { 
    $carNumber = $i;
    $carPosition = rand (0,$highwayLength);
    if ($carPosition >= $city1Start && $carPosition <= $city1End) {
        $carPositionCity = 'по городу';
        $carPositionKm = $carPosition - $city1Start;
        $maxSpeed = 70;
    } elseif ($carPosition >= $city2Start && $carPosition <= $city2End) {
        $carPositionCity = 'по городу';
        $carPositionKm = $carPosition - $city2Start;
        $maxSpeed = 70;
    } else {
        $carPositionCity = 'за городом';
        $carPositionKm = $carPosition;
        $maxSpeed = 90;
    }
    echo ("Машина " . $carNumber . " едет " . $carPositionCity . " на " . $carPositionKm . " км со скоростью не более " . $maxSpeed . '<br>');
}

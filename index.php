<?php
require 'vendor/autoload.php';

$vehiclesData = file_get_contents('resource/vehicles.json');
$vehicles = json_decode($vehiclesData, true);

// Display vehicles list
echo "Vehicles list:\n";
$i = 1;
foreach ($vehicles as $vehicle) {
    cli\out("#$i) {$vehicle['name']} (Max Speed: {$vehicle['maxSpeed']} {$vehicle['unit']})\n");
    $i++;
}

cli\out("\nPlayer 1, choose your vehicle number: ");
$playerOneChoose = cli\input();

cli\out("\nPlayer 2, choose your vehicle number: ");
$playerTwoChoose = cli\input();


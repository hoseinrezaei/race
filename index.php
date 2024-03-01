<?php
namespace App;

use App\Controller\RaceController;
use App\Models\Vehicle;
require 'vendor/autoload.php';
use cli;

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
$vehicleOne = new Vehicle('car', '20', 'Km/h');
$vehicleOne = new Vehicle($vehicles[$playerOneChoose - 1]['name'], $vehicles[$playerOneChoose - 1]['maxSpeed'], $vehicles[$playerOneChoose - 1]['unit']);

cli\out("\nPlayer 2, choose your vehicle number: ");
$playerTwoChoose = cli\input();
$vehicleTwo = new Vehicle($vehicles[$playerTwoChoose - 1]['name'], $vehicles[$playerTwoChoose - 1]['maxSpeed'], $vehicles[$playerTwoChoose - 1]['unit']);


$race = new RaceController($vehicleOne, $vehicleTwo);
$race->startRace(10);
$raceResult = $race->raceResult();

cli\out("\nResult: $raceResult");



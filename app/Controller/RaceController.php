<?php

namespace App\Controller;

use App\Models\Convertor;
use App\Models\Vehicle;

class RaceController
{
    private Vehicle $vehicleOne;
    private Vehicle $vehicleTwo;
    private int $raceDistance;
    private int $vehicleOneEndRaceAt;
    private int $vehicleTwoEndRaceAt;


    public function __construct(Vehicle $vehicleOne, Vehicle $vehicleTwo)
    {
        $this->vehicleOne = $vehicleOne;
        $this->vehicleTwo = $vehicleTwo;

    }

    public function startRace($raceDistance) :void
    {
        $this->raceDistance = $raceDistance;
        $this->calculateRaceTime();
    }

    public function raceResult() :string
    {

        if ($this->vehicleOneEndRaceAt < $this->vehicleTwoEndRaceAt)
        {
            $result = "player 1 win";
        }

        if ($this->vehicleOneEndRaceAt > $this->vehicleTwoEndRaceAt)
        {
            $result = "player 2 win";
        }

        if ($this->vehicleOneEndRaceAt == $this->vehicleTwoEndRaceAt)
        {
            $result = "The race ended in a draw";
        }

        $result = $result . "\n The first vehicle covered this distance in $this->vehicleOneEndRaceAt seconds.\n The second vehicle covered this distance in $this->vehicleTwoEndRaceAt seconds.
        ";

        return $result;
    }

    private function calculateRaceTime() :void
    {
        $this->vehicleOneEndRaceAt = $this->calculateDurationOfArrivalAtTheDestination($this->vehicleOne);
        $this->vehicleTwoEndRaceAt = $this->calculateDurationOfArrivalAtTheDestination($this->vehicleTwo);
    }

    private function calculateDurationOfArrivalAtTheDestination(Vehicle $vehicle) :int
    {
        $vehicleSpeedInKmh = Convertor::toKmh($vehicle->getMaxSpeed(), $vehicle->getUnit());
        $raceTimeInHour = $this->raceDistance / $vehicleSpeedInKmh;

//        convert race time to second
        return round($raceTimeInHour * 3600);
    }


}
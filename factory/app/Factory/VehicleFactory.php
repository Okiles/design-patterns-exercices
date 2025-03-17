<?php

namespace App\Factory;

class VehicleFactory {
    public static function createVehicle(string $type): Entity {
        switch ($type) {
            case 'bicycle':
                return new Bicycle();
            case 'car':
                return new Car();
            case 'truck':
                return new Truck();
            default:
                throw new InvalidArgumentException("Unknown vehicle type");
        }
    }

    public static function createVehicleByCriteria(float $distance, float $weight): Entity {
        if ($weight > 200) {
            return new Truck();
        } elseif ($weight > 20 || $distance > 20) {
            return new Car();
        } else {
            return new Bicycle();
        }
    }
}

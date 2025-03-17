<?php

namespace App\Entity;

class Truck implements EntityInterface {
    private $costPerKm;
    private $fuelType;

    public function __construct(float $costPerKm, string $fuelType) {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
    }

    public function getCostPerKm(): float {
        return $this->costPerKm;
    }

    public function getFuelType(): string {
        return $this->fuelType;
    }
}

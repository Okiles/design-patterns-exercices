<?php

namespace App\Entity;

interface Entity {
    public function getCostPerKm(): float;
    public function getFuelType(): string;
}

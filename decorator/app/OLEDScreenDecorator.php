<?php

namespace App;

class OLEDScreenDecorator extends ComputerDecorator {
    public function getPrice(): int {
        return $this->computer->getPrice() + 300; // Ajoute 300 au prix de base
    }

    public function getDescription(): string {
        return $this->computer->getDescription() . ", with OLED Screen";
    }
}

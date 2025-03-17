<?php
namespace App;

class GPUDecorator extends ComputerDecorator {
    public function getPrice(): int {
        return $this->computer->getPrice() + 200; // Ajoute 200 au prix de base
    }

    public function getDescription(): string {
        return $this->computer->getDescription() . ", with GPU";
    }
}

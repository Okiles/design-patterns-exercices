<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Laptop;
use App\GPUDecorator;
use App\OLEDScreenDecorator;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);

        $this->assertSame(600, $laptopWithGPU->getPrice()); // 400 (base) + 200 (GPU)
        $this->assertSame("A laptop computer, with GPU", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLED = new OLEDScreenDecorator($laptop);

        $this->assertSame(700, $laptopWithOLED->getPrice()); // 400 (base) + 300 (OLED)
        $this->assertSame("A laptop computer, with OLED Screen", $laptopWithOLED->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);
        $laptopWithGPUAndOLED = new OLEDScreenDecorator($laptopWithGPU);

        $this->assertSame(900, $laptopWithGPUAndOLED->getPrice()); // 400 (base) + 200 (GPU) + 300 (OLED)
        $this->assertSame("A laptop computer, with GPU, with OLED Screen", $laptopWithGPUAndOLED->getDescription());
    }
}

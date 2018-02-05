<?php
use PHPUnit\Framework\TestCase;
use Course\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->add(1, 2));
    }
}

<?php
use Course\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $this->assertEquals(3, $calculator->add(1, 2));
    }
}

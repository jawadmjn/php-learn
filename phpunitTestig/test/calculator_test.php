<?php

require 'calculator.php';
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
		$c = New Calculator;
		$result = $c->add(5,10);
		$this->assertEquals(15, $result);
	}
	
	public function testSub () 
	{
		$c = new Calculator;
		$result = $c->sub(10,5);
		$this->assertEquals(2, $result);
	}
}
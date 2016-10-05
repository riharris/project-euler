<?php

/**
 * Contains the NumberTest unit test
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class NumberTest extends PHPUnit_Framework_TestCase {
	public function testConfirmGetValueReturnsExpectedForIntegerArgument() {
		$fixture = new Euler\Number ( 10 );
		
		$this->assertSame ( '10', $fixture->getValue () );
	}
	public function testConfirmGetValueReturnsExpectedForStringArgument() {
		$fixture = new Euler\Number ( '10' );
		
		$this->assertSame ( '10', $fixture->getValue () );
	}
	public function testConfirmHasFactorReturnsExpectedForValidArgument() {
		$fixture = new Euler\Number ( '10' );
		
		$this->assertSame ( true, $fixture->isMultipleOf ( 5 ) );
	}
	public function testConfirmHasFactorReturnsExpectedForInvalidArgument() {
		$fixture = new Euler\Number ( '10' );
		
		$this->assertSame ( false, $fixture->isMultipleOf ( 3 ) );
	}
	public function testConfirmIncrementReturnsExpected() {
		$fixture = new Euler\Number ( 0 );
		
		$this->assertSame ( '2', $fixture->increment ()->increment ()->getValue () );
	}
	public function dataExpected() {
		$output [] = array (
				1,
				false 
		);
		$output [] = array (
				2,
				true 
		);
		$output [] = array (
				3,
				true 
		);
		$output [] = array (
				4,
				false 
		);
		$output [] = array (
				5,
				true 
		);
		$output [] = array (
				1,
				false 
		);
		
		return $output;
	}
	
	/**
	 * @dataProvider dataExpected
	 *
	 * @param int $value        	
	 * @param boolean $expected        	
	 */
	public function testConfirmIsPrimeReturnsExpected($value, $expected) {
		$fixture = new Euler\Number ( $value );
		
		$this->assertSame ( $expected, $fixture->isPrime () );
	}
}
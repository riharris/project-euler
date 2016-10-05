<?php
class NumberCollectionSumTest extends PHPUnit_Framework_TestCase {
	public function testConfirmOutputReturnsZeroForEmptyConstructorArgument() {
		$fixture = new Euler\Number\Collection ( $this->createMock ( 'Iterator' ) );
		$this->assertSame ( 0, $fixture->sum () );
	}
	public function testConfirmOutputReturnsZeroForInvalidConstructorArgument() {
		$fixture = new Euler\Number\Collection ( new ArrayIterator ( array (
				new stdClass () 
		) ) );
		$this->assertSame ( 0, $fixture->sum () );
	}
	public function testConfirmOutputReturnsOneForValidConstructorArgument() {
		$mock = $this->prophesize ( Euler\Numerical::class );
		$mock->value ()->willReturn ( 1 );
		$fixture = new Euler\Number\Collection ( new ArrayIterator ( array (
				$mock->reveal () 
		) ) );
		$this->assertSame ( 1, $fixture->sum () );
	}
	public function testConfirmOutputReturnsOneForValidConstructorArguments() {
		$mock1 = $this->prophesize ( Euler\Numerical::class );
		$mock1->value ()->willReturn ( 1 );
		$mock2 = $this->prophesize ( Euler\Numerical::class );
		$mock2->value ()->willReturn ( 2 );
		
		$fixture = new Euler\Number\Collection ( new ArrayIterator ( array (
				$mock1->reveal (),
				$mock2->reveal () 
		) ) );
		$this->assertSame ( 3, $fixture->sum () );
	}
}
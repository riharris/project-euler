<?php
class NumberCollectionCountTest extends PHPUnit_Framework_TestCase {
	public function testConfirmOutputReturnsZeroForEmptyConstructorArgument() {
		$fixture = new Euler\Number\Collection ( $this->createMock ( 'Iterator' ) );
		$this->assertSame ( 0, count ( $fixture ) );
	}
	public function testConfirmOutputReturnsZeroForInvalidConstructorArgument() {
		$fixture = new Euler\Number\Collection ( new ArrayIterator ( array (
				new stdClass () 
		) ) );
		$this->assertSame ( 0, count ( $fixture ) );
	}
	public function testConfirmOutputReturnsOneForValidConstructorArgument() {
		$fixture = new Euler\Number\Collection ( new ArrayIterator ( array (
				$this->createMock ( 'Euler\Numerical' ) 
		) ) );
		$this->assertSame ( 1, count ( $fixture ) );
	}
}
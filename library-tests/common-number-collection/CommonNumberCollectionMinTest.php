<?php
class CommonNumberCollectionMinTest extends PHPUnit_Framework_TestCase {
	public function testConfirmOutputMatchesExpected() {
		$collection1 = $this->prophesize ( Euler\Number\Collection::class );
		$collection1->min ()->willReturn ( 1 );
		$collection2 = $this->prophesize ( Euler\Number\Collection::class );
		$collection2->min ()->willReturn ( 2 );
		
		$fixture = new \Euler\Common\Number\Collection ( $collection1->reveal (), $collection2->reveal () );
		$this->assertSame ( 1, $fixture->min () );
	}
}
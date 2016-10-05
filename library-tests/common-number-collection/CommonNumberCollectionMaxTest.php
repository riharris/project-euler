<?php
class CommonNumberCollectionMaxTest extends PHPUnit_Framework_TestCase {
	public function testConfirmOutputMatchesExpected() {
		$collection1 = $this->prophesize ( Euler\Number\Collection::class );
		$collection1->max ()->willReturn ( 1 );
		$collection2 = $this->prophesize ( Euler\Number\Collection::class );
		$collection2->max ()->willReturn ( 2 );
		
		$fixture = new \Euler\Common\Number\Collection ( $collection1->reveal (), $collection2->reveal () );
		$this->assertSame ( 2, $fixture->max () );
	}
}
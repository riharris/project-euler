<?php

/**
 * Contains the MultiplesOfToTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class ProblemOneTest extends PHPUnit_Framework_TestCase {
	function testConfirmOutputMatchesExpected() {
		$this->assertSame ( 233168, array_sum ( array_unique ( array_merge ( iterator_to_array ( new Euler\MultiplesOfTo ( 3, 1000 ) ), iterator_to_array ( new Euler\MultiplesOfTo ( 5, 1000 ) ) ) ) ) );
	}
}

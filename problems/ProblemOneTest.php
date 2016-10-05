<?php
use Euler\Range;

/**
 * Contains the MultiplesOfToTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class ProblemOneTest extends PHPUnit_Framework_TestCase {
	function testConfirmOutputMatchesExpected() {
		$this->assertSame ( 233168, $this->sum ( (new Range ( 3, 999 ))->forValuesMatching ( function ($i) {
			return (($i % 3) == 0);
		} ) ) + $this->sum ( (new Range ( 5, 999 ))->forValuesMatching ( function ($i) {
			return (($i % 5) == 0);
		} ) ) - $this->sum ( (new Range ( 15, 999 ))->forValuesMatching ( function ($i) {
			return (($i % 15) == 0);
		} ) ) );
	}
	function sum(Range $range) {
		return $range->sum ();
	}
}

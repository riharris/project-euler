<?php
use Euler\FibonacciSequence, Euler\Sequence;
class ProblemTwoTest extends PHPUnit_Framework_TestCase {
	function testConfirmOutputMatchesExpected() {
		$this->assertSame ( 4613732, $this->sum ( (new FibonacciSequence ( 1, 4000000 ))->forValuesMatching ( function ($i) {
			return ((($i % 2) == 0) && $i < 4000000);
		} ) ) );
	}
	function sum(Sequence $range) {
		return $range->sum ();
	}
}
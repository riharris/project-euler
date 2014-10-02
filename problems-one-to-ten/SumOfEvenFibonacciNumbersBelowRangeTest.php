<?php

include_once 'FibonacciRange.php';

/**
 * Contains the SumOfEvenFibonacciNumbersBelowRangeTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class SumOfEvenFibonacciNumbersBelowRangeTest extends PHPUnit_Framework_TestCase {

	public function testConfirmValuesMatchExpectedForKnownRange(){

		$fixture = new FibonacciRange(100);

		$this->assertSame(array(1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89), $fixture->getValues());
	}

	public function testConfirmEvenValuesMatchExpectedForKnownRange(){

		$fixture = new FibonacciRange(100);

		$this->assertSame(array(2, 8, 34), $fixture->getEvenValues());
	}

	public function testConfirmEvenValuesSumMatchesExpectedForUnknownRange(){

		$fixture = new FibonacciRange(4000000);

		$this->assertSame(4613732, array_sum($fixture->getEvenValues()));
	}
}

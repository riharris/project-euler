<?php

include_once 'Number.php';

/**
 * Contains the LargestPrimeFactorTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class LargestPrimeFactorTest extends PHPUnit_Framework_TestCase {

	public function testConfirmFactorsMatchExpected(){

		$fixture = new Number('28');

		$this->assertSame(array('2', '4', '7', '14'), $fixture->getFactors());
	}

	public function testConfirmPrimeFactorsMatchExpected(){

		$fixture = new Number('28');

		$this->assertSame(array('2', '7'), $fixture->getPrimeFactors());
	}

	public function testConfirmPrimeFactorsMatchExpectedForGivenExample(){

		$fixture = new Number('13195');

		$this->assertSame(array('5', '7', '13', '29'), $fixture->getPrimeFactors());
	}

	public function testConfirmHighestPrimeFactorMatchesExpectedForUnknownExample(){

		$fixture = new Number('600851475143');

		$this->assertSame(array('71', '839', '1471', '6857'), $fixture->getPrimeFactors());
	}
}

<?php

include_once 'PrimeCounter.php';

/**
 * Contains the PrimeCountTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 8 Nov 2013
 */
class PrimeCountTest extends PHPUnit_Framework_TestCase {

	public function testConfirmOutputMatchesKnownValue(){

		$fixture = new PrimeCounter(6);

		$this->assertSame('13', $fixture->getLastPrime());
	}

	public function testConfirmOutputMatchesUnknownValue(){

		$fixture = new PrimeCounter(10001);

		$this->assertSame('104743', $fixture->getLastPrime());
	}
}

<?php

include_once 'Number.php';
include_once 'FactorMatcher.php';

/**
 * Contains the SmallestMultipleTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 2 Nov 2013
 */
class SmallestMultipleTest extends PHPUnit_Framework_TestCase {

	public function testConfirmFactorsForKnownValue(){

		$fixture = new Number(2520);

		$this->assertSame(array_map('strval', range(2, 10)), $fixture->setLargestFactorSought(10)
			->getFactors());
	}

	public function testResultForKnownPattern(){

		$fixture = new FactorMatcher();

		$this->assertSame('2520', $fixture->setPattern(range(2, 10))
			->getFirstInstance());
	}

	public function testResultForUnknownPattern(){

		$fixture = new FactorMatcher();

		$this->assertSame('232792560', $fixture->setPattern(range(2, 20))
			->getFirstInstance());
	}
}

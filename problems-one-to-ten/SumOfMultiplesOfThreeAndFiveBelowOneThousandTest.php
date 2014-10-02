<?php

include_once 'MultipleSummator.php';

/**
 * Contains the SumOfMultiplesOfThreeAndFiveBelowOneThousandTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class SumOfMultiplesOfThreeAndFiveBelowOneThousandTest extends PHPUnit_Framework_TestCase {

	public function testConfirmOutputMatchesExpectedForLimitOfTen(){

		$fixture = new MultipleSummator();

		$this->assertSame(23, $fixture->setMultiple1(3)
			->setMultiple2(5)
			->setLimit(10)
			->getSum());
	}

	public function testConfirmOutputMatchesExpectedForLimitOfOneThousand(){

		$fixture = new MultipleSummator();

		$this->assertSame(233168, $fixture->setMultiple1(3)
		->setMultiple2(5)
		->setLimit(1000)
		->getSum());
	}
}

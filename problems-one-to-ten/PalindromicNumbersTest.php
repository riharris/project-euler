<?php

include_once 'PalindromicNumbers.php';

/**
 * Contains the PalindromicNumbersTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 2 Nov 2013
 */
class PalindromicNumbersTest extends PHPUnit_Framework_TestCase {

	public function testMinorRange(){

		$fixture = new PalindromicNumbers();

		$this->assertSame(array(1001), $fixture->setLowerLimit(1001)
			->setUpperLimit(1002)
			->getNumbersInRange());
	}

	public function testFullRange(){

		$fixture = new PalindromicNumbers();

		$this->assertSame(array(997799, 996699, 995599, 994499, 993399),
		$fixture->setLowerLimit(100 * 100)
			->setUpperLimit(999 * 999)
			->setMaxResults(5)
			->getNumbersInRange());
	}

	public function testKnownRangeForNumbersHavingTwoDigitFactorPairs(){

		$fixture = new PalindromicNumbers();

		$this->assertSame(array(9009),
		$fixture->setLowerLimit(9009)
			->setUpperLimit(9999)
			->getNumbersInRangeHavingTwoDigitFactorPairs());
	}

	public function testUpperFullRangeForNumbersHavingThreeDigitFactorPairs(){

		$fixture = new PalindromicNumbers();

		$this->assertSame(array(906609, 888888, 886688, 861168, 855558),
		$fixture->setLowerLimit(900 * 950)
			->setUpperLimit(999 * 999)
			->getNumbersInRangeHavingThreeDigitFactorPairs());
	}
}

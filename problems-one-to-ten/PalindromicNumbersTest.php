<?php
include_once 'PalindromicNumbersInRange.php';

/**
 * Contains the PalindromicNumbersTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 2 Nov 2013
 */
class PalindromicNumbersTest extends PHPUnit_Framework_TestCase
{

    public function testMinorRange()
    {
        $this->assertSame(array(
            1001
        ), iterator_to_array(new PalindromicNumbersInRange(1001, 1002)));
    }

    public function testFullRange()
    {
        $this->assertSame(array(
            997799,
            996699,
            995599,
            994499,
            993399
        ), iterator_to_array(new PalindromicNumbersInRange(100 * 100, 999 * 999, 5)));
    }
    
    // public function testKnownRangeForNumbersHavingTwoDigitFactorPairs()
    // {
    // $fixture = new PalindromicNumbers();
    // $this->assertSame(array(
    // 9009
    // ), $fixture->setLowerLimit(9009)
    // ->setUpperLimit(9999)
    // ->getNumbersInRangeHavingTwoDigitFactorPairs());
    // }
    
    // public function testUpperFullRangeForNumbersHavingThreeDigitFactorPairs()
    // {
    // $fixture = new PalindromicNumbers();
    // $this->assertSame(array(
    // 906609,
    // 888888,
    // 886688,
    // 861168,
    // 855558
    // ), $fixture->setLowerLimit(900 * 950)
    // ->setUpperLimit(999 * 999)
    // ->getNumbersInRangeHavingThreeDigitFactorPairs());
    // }
}

<?php
include_once 'PalindromicNumbersInRange.php';
include_once 'PalindromicNumbersInRangeHavingTwoDigitFactorPairs.php';
include_once 'PalindromicNumbersInRangeHavingThreeDigitFactorPairs.php';

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

    public function testKnownRangeForNumbersHavingTwoDigitFactorPairs()
    {
        $this->assertSame(array(
            9009
        ), iterator_to_array(new PalindromicNumbersInRangeHavingTwoDigitFactorPairs(9009, 9999, 1)));
    }

    public function testUpperFullRangeForNumbersHavingThreeDigitFactorPairs()
    {
        $this->markTestSkipped('Solution for problem four');
        
        $this->assertSame(array(
            906609,
            888888,
            886688,
            861168,
            855558
        ), iterator_to_array(new PalindromicNumbersInRangeHavingThreeDigitFactorPairs(900 * 950, 999 * 999, 5)));
    }
}

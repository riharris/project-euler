<?php
include_once 'GreatestProductOfAdjacentNumbersOfLengthFor.php';

/**
 * Contains the GreatestProductOfAdjacentNumbersOfLengthForTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 6 Oct 2014
 */
class GreatestProductOfAdjacentNumbersOfLengthForTest extends PHPUnit_Framework_TestCase
{

    const TEST_GRID = "1 2 3
4 5 6
7 8 9";

    public function testConfirmOutputMatchesKnownResult()
    {
        $fixture = new GreatestProductOfAdjacentNumbersOfLengthFor(1, self::TEST_GRID);
    }
}
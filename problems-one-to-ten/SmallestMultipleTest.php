<?php
include_once 'Number.php';
include_once 'FactorsOfBelowLimit.php';

/**
 * Contains the SmallestMultipleTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 2 Nov 2013
 */
class SmallestMultipleTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmFactorsForGivenKnownValue()
    {
        $this->assertSame(array(
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10'
        ), iterator_to_array(new FactorsOfBelowLimit(new Number(2520), 10)));
    }

    public function testConfirmFactorsForLargerKnownValue()
    {
        $this->markTestSkipped('Solution for problem five');
        
        $this->assertSame(array(
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20'
        ), iterator_to_array(new FactorsOfBelowLimit(new Number(2 * 2 * 2 * 2 * 3 * 3 * 5 * 7 * 11 * 13 * 17 * 19), 20)));
    }
}

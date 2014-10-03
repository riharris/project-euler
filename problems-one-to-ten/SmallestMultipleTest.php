<?php
include_once 'Number.php';
include_once 'FactorMatcher.php';
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
        ), iterator_to_array(new FactorsOfBelowLimit(new Number(20 * 19 * 18 * 17 * 16 * 15 * 14 * 13 * 12 * 11), 20)));
    }
    
    // public function testResultForKnownPattern(){
    
    // $fixture = new FactorMatcher();
    
    // $this->assertSame('2520', $fixture->setPattern(range(2, 10))
    // ->getFirstInstance());
    // }
    
    // public function testResultForUnknownPattern(){
    
    // $fixture = new FactorMatcher();
    
    // $this->assertSame('232792560', $fixture->setPattern(range(2, 20))
    // ->getFirstInstance());
    // }
}

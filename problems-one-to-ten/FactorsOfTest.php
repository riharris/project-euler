<?php
include_once 'FactorsOf.php';
include_once 'Number.php';
include_once 'PrimeFactorsOf.php';

/**
 * Contains the FactorsOfTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class FactorsOfTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmFactorsMatchExpected()
    {
        $number = new Number(28);
        
        $this->assertSame(array(
            '2',
            '4',
            '7',
            '14'
        ), iterator_to_array(new FactorsOf($number)));
    }

    public function testConfirmPrimeFactorsMatchExpected()
    {
        $number = new Number('28');
        
        $this->assertSame(array(
            '2',
            '7'
        ), iterator_to_array(new PrimeFactorsOf($number)));
    }

    public function testConfirmPrimeFactorsMatchExpectedForGivenExample()
    {
        $this->markTestSkipped();
        
        $number = new Number('13195');
        
        $this->assertSame(array(
            '5',
            '7',
            '13',
            '29'
        ), iterator_to_array(new PrimeFactorsOf($number)));
    }

    public function testConfirmHighestPrimeFactorMatchesExpectedForUnknownExample()
    {
        $this->markTestSkipped('Solution for problem 3');
        
        $number = new Number('600851475143');
        
        $this->assertSame(array(
            '71',
            '839',
            '1471',
            '6857'
        ), iterator_to_array(new PrimeFactorsOf($number)));
    }
}

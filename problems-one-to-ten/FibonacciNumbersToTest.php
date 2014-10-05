<?php
include_once 'EvenFibonacciNumbersTo.php';
include_once 'FibonacciNumbersTo.php';

/**
 * Contains the FibonacciNumbersToTest class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class FibonacciNumbersToTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmValuesMatchExpectedForKnownRange()
    {
        $this->assertSame(array(
            1,
            1,
            2,
            3,
            5,
            8,
            13,
            21,
            34,
            55,
            89
        ), iterator_to_array(new FibonacciNumbersTo(100)));
    }

    public function testConfirmEvenValuesMatchExpectedForKnownRange()
    {
        $this->assertSame(array(
            2,
            8,
            34
        ), iterator_to_array(new EvenFibonacciNumbersTo(100)));
    }

    public function testConfirmEvenValuesSumMatchesExpectedForUnknownRange()
    {
        $this->markTestSkipped('Solution for problem two = 4613732');
        
        $this->assertSame(4613732, array_sum(iterator_to_array(new EvenFibonacciNumbersTo(4000000))));
    }
}
<?php
use Euler\Sequence;

/**
 * Contains the MultiplesOfToTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class ProblemOneTest extends PHPUnit_Framework_TestCase
{

    function testConfirmOutputMatchesExpected()
    {
        $sequence = new Sequence(3, 999);
        
        $this->assertSame(233168, $this->sum($sequence->forValuesMatching(array(
            $this,
            'isMultipleOfThree'
        ))) + $this->sum($sequence->forValuesMatching(array(
            $this,
            'isMultipleOfFive'
        ))) - $this->sum($sequence->forValuesMatching(array(
            $this,
            'isMultipleOfFifteen'
        ))));
    }

    function isMultipleOfThree($i)
    {
        return (($i % 3) == 0);
    }

    function isMultipleOfFive($i)
    {
        return (($i % 5) == 0);
    }

    function isMultipleOfFifteen($i)
    {
        return (($i % 15) == 0);
    }

    function sum(Sequence $range)
    {
        return $range->sum();
    }
}

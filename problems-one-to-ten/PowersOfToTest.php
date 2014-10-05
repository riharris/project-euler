<?php
include_once 'PowersOfTo.php';

/**
 * Contains the PowersOfToTest unit test
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PowersOfToTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmSumMatchesExpectedForFirstKnownSequence()
    {
        $this->assertSame(385, array_sum(iterator_to_array(new PowersOfTo(2, 10))));
    }

    public function testConfirmSumMatchesExpectedForSecondKnownSequence()
    {
        $this->assertSame(3025, array_sum(iterator_to_array(new PowersOfTo(1, 10))) * array_sum(iterator_to_array(new PowersOfTo(1, 10))));
    }

    public function testConfirmSumMatchesExpectedForFirstNewSequence()
    {
        $this->markTestSkipped('Solution for problem six = 25164150');
        $this->assertSame(338350, array_sum(iterator_to_array(new PowersOfTo(2, 100))));
    }

    public function testConfirmSumMatchesExpectedForSecondNewSequence()
    {
        $this->markTestSkipped('Solution for problem six = 25164150');
        $this->assertSame(25502500, array_sum(iterator_to_array(new PowersOfTo(1, 100))) * array_sum(iterator_to_array(new PowersOfTo(1, 100))));
    }
}
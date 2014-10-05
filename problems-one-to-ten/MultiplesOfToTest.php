<?php
include_once 'MultiplesOfTo.php';

/**
 * Contains the MultiplesOfToTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class MultiplesOfToTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $this->assertSame(array(
            3,
            6,
            9
        ), iterator_to_array(new MultiplesOfTo(3, 10)));
    }

    public function testConfirmOutputMatchesExpectedForLimitOfTen()
    {
        $this->assertSame(23, array_sum(array_unique(array_merge(iterator_to_array(new MultiplesOfTo(3, 10)), iterator_to_array(new MultiplesOfTo(5, 10))))));
    }

    public function testConfirmOutputMatchesExpectedForLimitOfOneThousand()
    {
        $this->markTestSkipped('Solution for problem one');
        
        $this->assertSame(233168, array_sum(array_unique(array_merge(iterator_to_array(new MultiplesOfTo(3, 1000)), iterator_to_array(new MultiplesOfTo(5, 1000))))));
    }
}
<?php
include_once 'PythagoreanTripletsHavingTotal.php';

/**
 * Contains the PythagoreanTripletsHavingTotalTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 6 Oct 2014
 */
class PythagoreanTripletsHavingTotalTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputForKnownTriplet()
    {
        $this->assertSame(array(
            '3,4,5',
            '4,3,5'
        ), iterator_to_array(new PythagoreanTripletsHavingTotal(12)));
    }

    public function testConfirmOutputForUnknownTriplet()
    {
        $this->markTestSkipped('Solution for problem nine');
        
        $this->assertSame(array(
            '200,375,425',
            '375,200,425'
        ), iterator_to_array(new PythagoreanTripletsHavingTotal(1000)));
    }
}
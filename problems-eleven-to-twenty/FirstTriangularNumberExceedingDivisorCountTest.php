<?php
include_once 'FirstTriangularNumberExceedingDivisorCount.php';

/**
 * Contains the FirstTriangularNumberExceedingDivisorCountTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 13 Oct 2014
 */
class FirstTriangularNumberExceedingDivisorCountTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpectedForKnownLimit()
    {
        $fixture = new FirstTriangularNumberExceedingDivisorCount(5);
        
        $this->assertSame('28', strval($fixture));
    }
    
    public function testConfirmOutputMatchesExpectedForUnknownLimit()
    {
        $this->markTestSkipped('Solution for problem twelve');
        
        $fixture = new FirstTriangularNumberExceedingDivisorCount(500);
    
        $this->assertSame('76576500', strval($fixture));
    }
}
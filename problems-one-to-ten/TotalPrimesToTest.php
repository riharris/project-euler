<?php
include_once 'TotalPrimesTo.php';

/**
 * Contains the TotalPrimesToTest class
 *
 * @author Richard Harrison
 * @since 6 Oct 2014
 */
class TotalPrimesToTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputForKnownRange()
    {
        $this->assertSame('17', strval(new TotalPrimesTo(10)));
    }

    public function testConfirmOutputForUnknownRange()
    {
        $this->markTestSkipped('Solution for problem ten');
        
        $this->assertSame('142913828922', strval(new TotalPrimesTo(2000000)));
    }
}
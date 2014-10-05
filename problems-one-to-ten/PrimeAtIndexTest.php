<?php
include_once 'PrimeAtIndex.php';

/**
 * Contains the PrimeAtIndexTest unit test
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PrimeAtIndexTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmResultMatchesExpectedForKnownValue()
    {
        $this->assertSame('13', sprintf('%s', new PrimeAtIndex(6)));
    }

    public function testConfirmResultMatchesExpectedForUnknownValue()
    {
        $this->markTestSkipped('Solution for problem seven = 104743');
        
        $this->assertSame('104743', sprintf('%s', new PrimeAtIndex(10001)));
    }
}
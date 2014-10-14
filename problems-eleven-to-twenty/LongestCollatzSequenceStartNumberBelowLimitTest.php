<?php
include_once 'LongestCollatzSequenceStartNumberBelowLimit.php';

/**
 * Contains the LongestCollatzSequenceStartNumberBelowLimitTest class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LongestCollatzSequenceStartNumberBelowLimitTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpectedForKnownRange()
    {
        /*
         * 1	1
         * 2	2, 1
         * 3	3, 10, 5, 16, 8, 4, 2, 1
         * 4	4, 2, 1
         * 5	5, 16, 8, 4, 2, 1
         * 6	6, 3, 10, 5, 16, 8, 4, 2, 1
         */
        
        $this->assertSame('3', strval(new LongestCollatzSequenceStartNumberBelowLimit(5)));
    }
    
    public function testConfirmOutputMatchesExpectedForUnknownRange()
    {
        $this->markTestSkipped('Solution for problem fourteen');
    
        $this->assertSame('837799', strval(new LongestCollatzSequenceStartNumberBelowLimit(1000000)));
    }
}
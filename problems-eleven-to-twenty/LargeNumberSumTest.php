<?php
include_once 'FiftyDigitNumbers.php';

/**
 * Contains the LargeNumberSumTest class
 *
 * @author Richard Harrison
 * @since 13 Oct 2014
 */
class LargeNumberSumTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $this->assertSame('37107287533902102798797998220837590246510135740250', current(iterator_to_array(new FiftyDigitNumbers()))->getValue());
    }

    public function testConfirmOutputMatchesExpectedForSum()
    {
        $this->markTestSkipped('Solution for problem thirteen');
        
        $sum = '0';
        
        foreach (iterator_to_array(new FiftyDigitNumbers()) as $number) {
            
            $sum = bcadd($sum, $number->getValue());
        }
        
        $this->assertSame('5537376230', substr($sum, 0, 10));
    }
}
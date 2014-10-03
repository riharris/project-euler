<?php
include_once 'Number.php';

/**
 * Contains the SumSquareDifferenceTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 8 Nov 2013
 */
class SumSquareDifferenceTest extends PHPUnit_Framework_TestCase
{

    public function dataExpected()
    {
        $output[] = array(
            10,
            1,
            '55'
        );
        $output[] = array(
            10,
            2,
            '385'
        );
        // answer = (55 x 55) - 385 = (55 x 55) - (7 x 55) = 48 x 55 = 2640
        $output[] = array(
            100,
            1,
            '5050'
        );
        $output[] = array(
            100,
            2,
            '338350'
        );
        // answer = (5050 x 5050) - (67 x 5050) = 4983 x 5050 = 25164150
        
        return $output;
    }

    /**
     * @dataProvider dataExpected
     * 
     * @param int $number            
     * @param int $power            
     * @param string $expected            
     */
    public function testConfirmSumOfPowersOutputMatchesExpected($number, $power, $expected)
    {
        $fixture = new Number($number);
        
        $this->assertSame($expected, $fixture->getSumOfPowers($power));
    }
}

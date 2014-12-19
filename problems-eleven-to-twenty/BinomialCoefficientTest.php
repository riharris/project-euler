<?php
include_once 'BinomialCoefficient.php';

/**
 * Contains the BinomialCoefficientTest unit test
 *
 * @author Richard Harrison
 * @since 19 Dec 2014
 */
class BinomialCoefficientTest extends PHPUnit_Framework_TestCase
{

    public function dataExpected()
    {
        $output[] = array(
            4,
            2,
            '6'
        );
        
        return $output;
    }

    /**
     * @dataProvider dataExpected
     * @param int $possibilities
     * @param int $outcomes
     * @param string $expected
     */
    public function testConfirmOutputMatchesExpected($possibilities, $outcomes, $expected)
    {
        $this->assertSame(strval(new BinomialCoefficient($outcomes, $possibilities)), $expected);
    }
}
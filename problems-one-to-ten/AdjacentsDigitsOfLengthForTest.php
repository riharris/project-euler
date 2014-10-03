<?php
include_once 'AdjacentDigitsOfLengthFor.php';
include_once 'DigitProductOf.php';
include_once 'Number.php';

/**
 * Contains the AdjacentDigitsOfLengthForTest unit test
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class AdjacentDigitsOfLengthForTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpectedForSimpleSeries()
    {
        $this->assertSame(array(
            '123',
            '234',
            '345',
            '456'
        ), iterator_to_array(new AdjacentDigitsOfLengthFor(3, '123456')));
    }

    public function testConfirmMaxDigitProductMatchesExpectedForGivenLength()
    {
        $this->assertSame('0', array_reduce(iterator_to_array(new AdjacentDigitsOfLengthFor(3, '123456')), function ($max, $value)
        {
            if (bccomp(strval(new DigitProductOf(new Number($value))), $max) == 1) {
                return $value;
            } else {
                return $max;
            }
        }, '0'));
    }
}
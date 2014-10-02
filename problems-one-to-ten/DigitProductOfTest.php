<?php
include_once 'DigitProductOf.php';
include_once 'Number.php';

/**
 * Contains the DigitProductOfTest class
 *
 * @author Richard Harrison
 * @since 9 Nov 2013
 */
class DigitProductOfTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $number = new Number(321);
        
        $this->assertSame('6', sprintf('%s', new DigitProductOf($number)));
    }
}

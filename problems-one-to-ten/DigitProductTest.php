<?php
include_once 'DigitProduct.php';
include_once 'Number.php';

/**
 * Contains the DigitProductTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 9 Nov 2013
 */
class DigitProductTest extends PHPUnit_Framework_TestCase
{

    public function dataExpected()
    {
        $output[] = array(
            '321',
            '6'
        );
        
        return $output;
    }

    /**
     * @dataProvider dataExpected
     *
     * @param string $input            
     * @param int $expected            
     */
    public function testConfirmOutputMatchesExpected($input, $expected)
    {
        $this->assertSame($expected, strval(new DigitProduct(new Number($input))));
    }
}

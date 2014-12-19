<?php

include_once 'Factorial.php';

/**
 * Contains the FactorialTest unit test
 *
 * @author Richard Harrison
 * @since 19 Dec 2014
 */
class FactorialTest extends PHPUnit_Framework_TestCase
{
    
    public function dataExpected() {
        
        $output[] = array(0, '1');
        $output[] = array(1, '1');
        $output[] = array(2, '2');
        $output[] = array(3, '6');
        $output[] = array(4, '24');
        $output[] = array(40, '815915283247897734345611269596115894272000000000');
        
        return $output;
    }
    
    /**
     * @dataProvider dataExpected
     * @param int $input
     * @param string $output
     */
    public function testConfirmOutputMatchesExpected($input, $output) {
        
        $this->assertSame($output, strval(new Factorial($input)));
    }
}
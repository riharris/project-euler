<?php
include_once 'TriangleNumberAtIndex.php';

/**
 * Contains the TriangleNumberAtIndexTest class
 *
 * @author Richard Harrison
 * @since 13 Oct 2014
 */
class TriangleNumberAtIndexTest extends PHPUnit_Framework_TestCase
{

    public function dataExpected() {
        
        $output[] = array(2, '3');
        $output[] = array(3, '6');
        $output[] = array(4, '10');
        $output[] = array(5, '15');
        
        return $output;
    }
    
    /**
     * @dataProvider dataExpected
     * @param int $index
     * @param string $value
     */
    public function testConfirmOutputMatchesExpectedForKnownValue($index, $value)
    {
        $fixture = new TriangleNumberAtIndex($index);
        
        $this->assertSame($value, strval($fixture));
    }
}
<?php
include_once 'GridEntry.php';

/**
 * Contains the GridEntryTest class
 *
 * @author Richard Harrison
 * @since 10 Oct 2014
 */
class GridEntryTest extends PHPUnit_Framework_TestCase
{
    public function dataExpected() {
        
        $output[] = array(array(0,0), array(0,0), 'sharesColumn', 1, true);
        $output[] = array(array(0,0), array(0,1), 'sharesColumn', 1, true);
        $output[] = array(array(0,0), array(0,2), 'sharesColumn', 1, false);
        $output[] = array(array(0,0), array(1,0), 'sharesColumn', 1, false);
        
        $output[] = array(array(0,0), array(0,0), 'sharesMinorDiagonal', 1, true);
        $output[] = array(array(0,0), array(-1,1), 'sharesMinorDiagonal', 1, true);
        $output[] = array(array(0,0), array(1,-1), 'sharesMinorDiagonal', 1, true);
        $output[] = array(array(0,0), array(-2,2), 'sharesMinorDiagonal', 1, false);
        $output[] = array(array(0,0), array(2,-2), 'sharesMinorDiagonal', 1, false);
        $output[] = array(array(0,0), array(1,0), 'sharesMinorDiagonal', 1, false);
        
        $output[] = array(array(0,0), array(0,0), 'sharesMajorDiagonal', 1, true);
        $output[] = array(array(0,0), array(1,1), 'sharesMajorDiagonal', 1, true);
        $output[] = array(array(0,0), array(-1,-1), 'sharesMajorDiagonal', 1, true);
        $output[] = array(array(0,0), array(2,2), 'sharesMajorDiagonal', 1, false);
        $output[] = array(array(0,0), array(-2,-2), 'sharesMajorDiagonal', 1, false);
        $output[] = array(array(0,0), array(1,0), 'sharesMajorDiagonal', 1, false);
        
        $output[] = array(array(0,0), array(0,0), 'sharesRow', 1, true);
        $output[] = array(array(0,0), array(1,0), 'sharesRow', 1, true);
        $output[] = array(array(0,0), array(2,0), 'sharesRow', 1, false);
        $output[] = array(array(0,0), array(0,1), 'sharesRow', 1, false);
        
        
        
        return $output;
    }
    
    
    /**
     * @dataProvider dataExpected
     * @param array $coords1
     * @param array $coords2
     * @param string $methodName
     * @param int $maxDistance
     * @param boolean $expected
     */
    public function testConfirmDirectionAndDistanceMethodsReturnExpected(array $coords1, array $coords2, $methodName, $maxDistance, $expected)
    {
        $fixture1 = new GridEntry($coords1[0], $coords1[1], 0);
        $fixture2 = new GridEntry($coords2[0], $coords2[1], 0);
        $this->assertSame($expected, $fixture1->$methodName($fixture2, $maxDistance));
    }
}
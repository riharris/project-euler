<?php
include_once 'LatticePathCount.php';

/**
 * Contains the LatticePathCountTest class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticePathCountTest extends PHPUnit_Framework_TestCase
{

    public function dataExpected()
    {
        $output[] = array(
            2,
            6
        );
        $output[] = array(
            3,
            20
        );
        $output[] = array(
            4,
            70
        );
        $output[] = array(
            5,
            252
        );
        $output[] = array(
            6,
            924
        );
        $output[] = array(
            7,
            3432
        );
        $output[] = array(
            8,
            12870
        );
        
        return $output;
    }

    /**
     * @dataProvider dataExpected
     * 
     * @param int $scale            
     * @param int $count            
     */
    public function testConfirmOutputMatchesExpectedForKnownProblems($scale, $count)
    {
        $fixture = new LatticePathCount($scale);
        
        $this->assertSame($count, count(iterator_to_array($fixture)));
    }
}
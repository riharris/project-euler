<?php
include_once 'LatticePath.php';

/**
 * Contains the LatticePathTest class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticePathTest extends PHPUnit_Framework_TestCase
{

    public function testOutputMatchesExpectedForSimplePath()
    {
        $fixture = new LatticePath();
        
        $fixture->append(new LatticeVertex(1, array(
            2
        )))->append(new LatticeVertex(2, array()));
        
        $this->assertSame('1-2', strval($fixture));
    }
}
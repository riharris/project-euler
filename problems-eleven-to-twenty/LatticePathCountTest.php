<?php
include_once 'LatticePathCount.php';

/**
 * Contains the LatticePathCountTest class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 14 Oct 2014
 */
class LatticePathCountTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpectedForKnownProblem()
    {
        $fixture = new LatticePathCount(2);
        
        $this->assertSame(6, count(iterator_to_array($fixture)));
    }
    
    public function testConfirmOutputMatchesExpectedForUnknownProblem()
    {
        $fixture = new LatticePathCount(20);
    
        $this->assertSame(6, count(iterator_to_array($fixture)));
    }
}
<?php
use Euler\CollatzSequence;

class CollatzSequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new CollatzSequence(13);
        
        $this->assertSame('13,40,20,10,5,16,8,4,2,1', $fixture->concat());
    }
}
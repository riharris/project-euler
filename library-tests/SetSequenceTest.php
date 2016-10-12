<?php
use Euler\SetSequence;

class SetSequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new SetSequence(5);
        
        $this->assertSame('1,1,3,1,2,2,1,3,1,2,1,2,2,2,1', $fixture->concat());
    }
}
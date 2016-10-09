<?php
use Euler\FactorSequence;

class FactorSequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmConcatMatchesExpected()
    {
        $fixture = new FactorSequence(16);
        
        $this->assertSame('1,2,4,8,16', $fixture->concat());
    }
}
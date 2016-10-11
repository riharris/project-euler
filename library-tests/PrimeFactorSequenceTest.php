<?php

use Euler\PrimeFactorSequence;

class PrimeFactorSequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmConcatMatchesExpectedForPrime()
    {
        $fixture = new PrimeFactorSequence(17);
        
        $this->assertSame('1,17', $fixture->concat());
    }

    public function testConfirmConcatMatchesExpectedForSquare()
    {
        $fixture = new PrimeFactorSequence(16);
        
        $this->assertSame('1,2,8,16', $fixture->concat());
    }
}
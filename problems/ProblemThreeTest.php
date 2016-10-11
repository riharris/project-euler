<?php
use Euler\PrimeFactorSequence;

class ProblemThreeTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmPrimeFactorSequenceMatchesExpected()
    {
        $fixture = new PrimeFactorSequence(600851475143);
        
        $this->assertSame('1,71,839,1471,6857,87625999,408464633,716151937,8462696833,600851475143', $fixture->concat());
    }
}
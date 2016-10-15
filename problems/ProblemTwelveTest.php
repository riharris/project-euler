<?php
use Euler\TriangularNumberSequence;
use Euler\FactorSequence;

class ProblemTwelveTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new TriangularNumberSequence(12374, 12375);
        
        $this->assertSame(76576500, $fixture->forValuesMatching(array(
            $this,
            'hasMoreThanFiveHundredDivisors'
        ))
            ->first());
    }

    public function hasMoreThanFiveHundredDivisors($number)
    {
        $factors = new FactorSequence($number);
        
        return ($factors->count() > 500);
    }
}
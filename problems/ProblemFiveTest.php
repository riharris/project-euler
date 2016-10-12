<?php
use Euler\FactorSequence, Euler\Sequence;

class ProblemFiveTest extends PHPUnit_Framework_TestCase
{

    const MATCH = '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20';

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new Sequence(232792550, 232793600);
        
        $this->assertSame(232792560, $fixture->forValuesMatching(array(
            $this,
            'matchesFactorPattern'
        ))
            ->first());
    }

    public function matchesFactorPattern($number)
    {
        $factors = new FactorSequence($number);
        
        return (substr($factors->concat(), 0, strlen(self::MATCH)) == self::MATCH);
    }
}
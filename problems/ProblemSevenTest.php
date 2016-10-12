<?php
use Euler\Sequence;
use Euler\PrimeFactorSequence;

class ProblemSevenTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new Sequence(1, 105000);
        
        $this->assertSame(104743, $fixture->forValuesMatching(array(
            $this,
            'isPrime'
        ))
            ->valueAt(10001));
    }

    public function isPrime($number)
    {
        if ($number == 2) {
            return true;
        } elseif ($number % 2 == 0) {
            return false;
        } else {
            return ((new PrimeFactorSequence($number))->count() == 2);
        }
    }
}
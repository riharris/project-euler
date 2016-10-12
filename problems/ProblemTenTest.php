<?php
use Euler\PrimeFactorSequence;
use Euler\Sequence;

class ProblemTenTest extends PHPUnit_Framework_TestCase
{

    /**
     * @group ignore
     */
    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new Sequence(1, 1999999);
        
        $this->assertSame(142913828922, $fixture->forValuesMatching(array(
            $this,
            'isPrime'
        ))
            ->sum());
    }

    public function isPrime($number)
    {
        if ($number == 2) {
            return true;
        } elseif ($number % 2 == 0) {
            return false;
        } elseif ($number == 3) {
            return true;
        } elseif ($number % 3 == 0) {
            return false;
        } elseif ($number == 5) {
            return true;
        } elseif ($number % 5 == 0) {
            return false;
        } else {
            return ((new PrimeFactorSequence($number))->count() == 2);
        }
    }
}


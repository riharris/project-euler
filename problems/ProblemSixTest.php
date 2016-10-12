<?php
use Euler\Sequence;

class ProblemSixTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $this->assertSame(25164150, pow((new Sequence(1, 100))->sum(), 2) - ((new Sequence(1, 100 * 100))->forValuesMatching(array(
            $this,
            'isSquare'
        ))
            ->sum()));
    }

    public function isSquare($number)
    {
        return ((int) sqrt($number) * (int) sqrt($number) == $number);
    }
}
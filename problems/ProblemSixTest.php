<?php
use Euler\Sequence;
use Euler\SquaresSequence;

class ProblemSixTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $this->assertSame(25164150, pow((new Sequence(1, 100))->sum(), 2) - ((new SquaresSequence(1, 100))->sum()));
    }
}
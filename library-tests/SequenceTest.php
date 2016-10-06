<?php
use Euler\Sequence;

class SequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmResultMatchesExpectedForOpenMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(3, $fixture->sum());
    }

    public function testConfirmResultMatchesExpectedForClosedMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(0, $fixture->forValuesMatching(function () {
            return false;
        })
            ->sum());
    }

    public function testConfirmResultMatchesExpectedForSelectiveMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(2, $fixture->forValuesMatching(function ($i) {
            return ($i == 2);
        })
            ->sum());
    }
}
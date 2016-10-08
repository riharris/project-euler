<?php
use Euler\Sequence;

class SequenceTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmCountMatchesExpectedForOpenMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(2, $fixture->count());
    }

    public function testConfirmSumMatchesExpectedForOpenMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(3, $fixture->sum());
    }

    public function testConfirmCountMatchesExpectedForClosedMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(0, $fixture->forValuesMatching(function () {
            return false;
        })
            ->count());
    }

    public function testConfirmSumMatchesExpectedForClosedMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(0, $fixture->forValuesMatching(function () {
            return false;
        })
            ->sum());
    }

    public function testConfirmCountMatchesExpectedForSelectiveMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(1, $fixture->forValuesMatching(function ($i) {
            return ($i == 2);
        })
            ->count());
    }

    public function testConfirmSumMatchesExpectedForSelectiveMatch()
    {
        $fixture = new Sequence(1, 2);
        $this->assertSame(2, $fixture->forValuesMatching(function ($i) {
            return ($i == 2);
        })
            ->sum());
    }
}
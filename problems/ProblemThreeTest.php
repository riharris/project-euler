<?php
use Euler\DescendingSequence;

class ProblemThreeTest extends PHPUnit_Framework_TestCase
{

    public function testDescendingSequence()
    {
        $fixture = new DescendingSequence(10, 6);
        
        $this->assertSame(0, $fixture->forValuesMatching(array(
            $this,
            'isOdd'
        ))
            ->first());
    }

    public function isOdd($i)
    {
        return ($i % 2 == 1);
    }
}
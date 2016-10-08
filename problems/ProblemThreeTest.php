<?php
use Euler\DescendingSequence;

class ProblemThreeTest extends PHPUnit_Framework_TestCase
{

    public function testDescendingSequence()
    {
        $fixture = new DescendingSequence(4,2);
        
        $this->assertSame(3, $fixture->forValuesMatching(array(
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
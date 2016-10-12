<?php
use Euler\SetSequence;

class ProblemNineTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new SetSequence(1000, 200);
        
        $this->assertSame(31875000, array_product(explode(',', $fixture->forValuesMatching(array(
            $this,
            'isPythagoreanTriple'
        ))
            ->first())));
    }

    public function isPythagoreanTriple($set)
    {
        $values = explode(',', $set);
        
        return (pow($values[0], 2) + pow($values[1], 2) == pow($values[2], 2));
    }
}
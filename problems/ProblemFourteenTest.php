<?php
use Euler\CollatzSequence;
use Euler\Sequence;

class ProblemFourteenTest extends PHPUnit_Framework_TestCase
{

    protected $currentMax;

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new Sequence(837795, 837800);
        
        $this->assertSame(837799, $fixture->forValuesMatching(array(
            $this,
            'hasLargestChainCount'
        ))
            ->last());
    }

    public function hasLargestChainCount($number)
    {
        $count = (new CollatzSequence($number))->count();
        
        if ($count > $this->currentMax) {
            $this->currentMax = $count;
            return true;
        } else {
            return false;
        }
    }
}
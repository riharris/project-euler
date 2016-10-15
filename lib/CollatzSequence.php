<?php
namespace Euler;

class CollatzSequence extends Sequence
{

    public function __construct($start)
    {
        parent::__construct($start, 1);
    }

    protected function generate($start, $end)
    {
        yield $start;
        
        while ($start > $end) {
            
            $start = ($start % 2) ? 1 + (3 * $start) : intdiv($start, 2);
            
            yield $start;
        }
    }
}
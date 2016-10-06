<?php
namespace Euler;

class FibonacciSequence extends Sequence
{

    protected function generate($start, $end)
    {
        $last = 0;
        $current = $start;
        while ($current < $end) {
            $current = $last + $current;
            $last = $current - $last;
            yield $current;
        }
    }
}
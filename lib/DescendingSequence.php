<?php
namespace Euler;

class DescendingSequence extends Sequence
{

    protected function generate($start, $end)
    {
        while ($start > $end) {
            yield $start --;
        }
    }
}
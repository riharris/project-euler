<?php
namespace Euler;

class DescendingPalindromicSequence extends Sequence
{

    protected function generate($start, $end)
    {
        while ($start > $end) {
            if ($start == strrev($start)) {
                yield $start;
            }
            $start --;
        }
    }
}
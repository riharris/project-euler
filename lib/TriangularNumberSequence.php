<?php
namespace Euler;

class TriangularNumberSequence extends Sequence
{

    protected function generate($start, $end)
    {
        while ($start <= $end) {
            $output = 0;
            for ($i = 1; $i <= $start; $i ++) {
                $output += $i;
            }
            yield $output;
            $start ++;
        }
    }
}
<?php
namespace Euler;

class SquaresSequence extends Sequence
{

    protected function generate($start, $end)
    {
        while ($start <= $end) {
            yield pow($start, 2);
            $start ++;
        }
    }
}
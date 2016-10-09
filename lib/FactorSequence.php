<?php
namespace Euler;

class FactorSequence extends Sequence
{

    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
        parent::__construct(2, intval(ceil($number / 2)));
    }

    protected function generate($start, $end)
    {
        yield 1;
        while ($start <= $end) {
            if ($this->number % $start == 0) {
                yield $start;
            }
            $start ++;
        }
        yield $this->number;
    }
}
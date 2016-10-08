<?php
namespace Euler;

class FactorSequence extends Sequence
{

    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
        parent::__construct(2, intval(sqrt($number)) + 1);
    }

    protected function generate($start, $end)
    {
        while ($start < $end) {
            if ($this->number % $start == 0) {
                yield $start;
            }
            $start ++;
        }
    }
}
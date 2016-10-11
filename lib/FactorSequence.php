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
        $factors = array(
            1
        );
        yield 1;
        $max = (int) sqrt($this->number);
        while ($start <= $max) {
            if ($this->number % $start == 0) {
                array_unshift($factors, $start);
                yield $start;
            }
            $start ++;
        }
        
        foreach ($factors as $factor) {
            
            if ($factor != $this->number / $factor) {
                yield $this->number / $factor;
            }
        }
    }
}
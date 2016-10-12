<?php
namespace Euler;

class AdjacentDigitSequence extends Sequence
{

    protected $digits;

    protected $number;

    public function __construct($number, $digits)
    {
        $this->digits = $digits;
        $this->number = $number;
        parent::__construct(0, 0);
    }

    protected function generate($start, $end)
    {
        $position = 0;
        
        $product = substr($this->number, $position, $this->digits);
        
        while (strlen($product) == $this->digits) {
            
            yield array_product(str_split($product));
            $position ++;
            $product = substr($this->number, $position, $this->digits);
        }
    }
}
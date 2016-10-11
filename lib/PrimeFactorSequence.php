<?php
namespace Euler;

class PrimeFactorSequence extends FactorSequence
{

    protected function isFactor($start)
    {
        if ($this->number % $start == 0) {
            
            if (2 == (new FactorSequence($start))->count()) {
                
                return true;
            }
        }
        
        return false;
    }
}
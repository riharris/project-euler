<?php
namespace Euler;

class SetSequence extends Sequence
{

    public function __construct($total, $start = 1)
    {
        parent::__construct($start, $total);
    }

    protected function generate($first, $total)
    {
        while ($first < $total / 2) {
            
            $second = 1;
            
            while ($first + $second < $total) {
                
                $third = $total - ($first + $second);
                
                yield sprintf('%d,%d,%d', $first, $second, $third);
                
                $second ++;
            }
            
            $first ++;
        }
    }
}

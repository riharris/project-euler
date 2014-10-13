<?php

/**
 * Contains the TriangleNumberAtIndex class
 *
 * @author Richard Harrison
 * @since 13 Oct 2014
 */
class TriangleNumberAtIndex
{

    /**
     *
     * @var Number
     */
    protected $number;

    /**
     *
     * @param int $index            
     */
    public function __construct($index)
    {
        $total = 1;
        
        if ($index > 1) {
            
            for ($i = 2; $i <= $index; $i ++) {
                
                $total += $i;
            }
        }
        
        $this->number = new Number($total);
    }

    public function __toString()
    {
        return $this->number->getValue();
    }
}
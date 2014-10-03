<?php
include_once 'Number.php';

/**
 * Contains the PrimeAtIndex class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PrimeAtIndex
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
        if ($index <= 1) {
            
            $this->number = new Number(2);
        } elseif ($index == 2) {
            
            $this->number = new Number(3);
        } else {
            
            $count = 3;
            $this->number = new Number(5);
            
            while ($count < $index) {
                
                $this->number->increment()->increment();
                
                if ($this->number->isPrime()) {
                    
                    $count ++;
                }
            }
        }
    }

    public function __toString()
    {
        return $this->number->getValue();
    }
}
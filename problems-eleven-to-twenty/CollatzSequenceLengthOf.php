<?php
include_once 'Number.php';

/**
 * Contains the CollatzSequenceLengthOf class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class CollatzSequenceLengthOf
{

    /**
     *
     * @var Number
     */
    protected $number;

    /**
     *
     * @param Number $number            
     */
    public function __construct(Number $number)
    {
        $this->number = $number;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        $count = 0;
        
        while ($this->number->getValue() != '1') {
            
            if ($this->number->isMultipleOf(2)) {
                
                $this->number = new Number(bcdiv($this->number->getValue(), '2'));
            } else {
                
                $this->number = new Number(bcmul($this->number->getValue(), '3'));
                $this->number->increment();
            }
            
            $count ++;
        }
        
        return strval($count);
    }
}
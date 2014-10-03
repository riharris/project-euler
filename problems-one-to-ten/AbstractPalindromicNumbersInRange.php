<?php

include_once 'AbstractIterator.php';
include_once 'Number.php';

/**
 * Contains the AbstractPalindromicNumbersInRange class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 3 Oct 2014
 */
abstract class AbstractPalindromicNumbersInRange extends AbstractIterator
{

    /**
     *
     * @param int $lower            
     * @param int $upper            
     * @param int $maxCount            
     * @return multitype:number
     */
    public function __construct($lower, $upper, $maxCount = 0)
    {
        /**
         *
         * @var array $values
         */
        $values = array();
        
        /**
         * The palindrome can be written as: abccba
         *
         * Which then simpifies to: 100000a + 10000b + 1000c + 100c + 10b + a
         * And then: 100001a + 10010b + 1100c
         * Factoring out 11, you get: 11(9091a + 910b + 100c)
         *
         * Meaning that the palindrome must be divisible by 11, so once
         * we locate one, we can increase the step count to 11 and still not miss any
         */
        $step = - 1;
        
        for ($i = $upper; $i >= $lower; $i += $step) {
            
            if ($this->isPalindromic(new Number($i)) && $this->isValid(new Number($i))) {
                
                $values[] = $i;
                $step = - 11;
            }
            
            if ($maxCount > 0 && count($values) >= $maxCount) {
                
                break;
            }
        }
        
        $this->iterator = new ArrayIterator($values);
    }

    /**
     *
     * @param Number $number            
     * @return boolean
     */
    protected function isPalindromic(Number $number)
    {
        return $number->isPalindromic();
    }
    
    /**
     * @param Number $number
     * @return boolean
     */
    abstract protected function isValid(Number $number);
}
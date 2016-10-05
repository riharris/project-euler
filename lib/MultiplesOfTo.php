<?php

namespace Euler;

/**
 * Contains the MultiplesOfTo class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class MultiplesOfTo extends AbstractIterator
{

    /**
     *
     * @param int $factor            
     * @param int $limit            
     */
    public function __construct($factor, $limit)
    {
        $values = array();
        
        for ($i = 1; $i < $limit; $i ++) {
            
            if ($this->isMultipleOf($factor, new Number($i))) {
                
                $values[] = $i;
            }
        }
        
        parent::__construct($values);
    }

    /**
     *
     * @param int $factor            
     * @param Number $number            
     */
    protected function isMultipleOf($factor, Number $number)
    {
        return $number->isMultipleOf($factor);
    }
}
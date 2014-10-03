<?php
include_once 'AbstractIterator.php';

/**
 * Contains the FibonacciNumbersTo class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class FibonacciNumbersTo extends AbstractIterator
{

    /**
     *
     * @param int $limit            
     */
    public function __construct($limit)
    {
        /**
         *
         * @var array
         */
        $values = array(
            1,
            1
        );
        
        while ($this->getNextElement($values) <= $limit) {
            
            $values[] = $this->getNextElement($values);
        }
        
        parent::__construct($values);
    }

    /**
     *
     * @param array $values            
     * @return int
     */
    protected function getNextElement(array $values)
    {
        return array_sum(array_slice($values, - 2));
    }
}
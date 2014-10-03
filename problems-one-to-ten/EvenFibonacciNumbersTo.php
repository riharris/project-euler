<?php
include_once 'AbstractIterator.php';
include_once 'Number.php';

/**
 * Contains the EvenFibonacciNumbersTo class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class EvenFibonacciNumbersTo extends AbstractIterator
{

    /**
     *
     * @param int $limit            
     */
    public function __construct($limit)
    {
        /**
         *
         * @var array $values
         */
        $values = array();
        
        /**
         *
         * @var array $odds
         */
        $odds = array(
            1,
            1
        );
        
        while (array_sum($odds) <= $limit) {
            
            $values[] = array_sum($odds);
            
            $odds = $this->getNextTwoOddNumbersAssumingOOEOOESequence($odds);
        }
        
        parent::__construct($values);
    }

    /**
     *
     * @param array $odds            
     * @return array
     */
    protected function getNextTwoOddNumbersAssumingOOEOOESequence(array $odds)
    {
        return array(
            end($odds) + array_sum($odds),
            end($odds) + array_sum($odds) + array_sum($odds)
        );
    }
}
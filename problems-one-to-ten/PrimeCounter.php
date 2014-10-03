<?php
include_once 'Number.php';

/**
 * Contains the PrimeCounter class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 8 Nov 2013
 */
class PrimeCounter
{

    /**
     *
     * @var string
     */
    private $_count;

    /**
     *
     * @param int $count            
     */
    public function __construct($count)
    {
        $this->_count = strval($count);
    }

    public function getLastPrime()
    {
        $count = '0';
        $number = '0';
        
        while (bccomp($this->_count, $count) > 0) {
            
            $number = bcadd($number, '1');
            
            $possiblePrime = new Number($number);
            
            if ($possiblePrime->isPrime()) {
                
                $count = bcadd($count, '1');
            }
        }
        
        return $number;
    }
}

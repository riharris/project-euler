<?php
include_once 'FactorsOf.php';
include_once 'Number.php';

/**
 * Contains the FirstTriangularNumberExceedingDivisorCount class
 *
 * @author Richard Harrison
 * @since 13 Oct 2014
 */
class FirstTriangularNumberExceedingDivisorCount
{

    /**
     *
     * @var int
     */
    protected $count;

    /**
     *
     * @param int $count            
     */
    public function __construct($count)
    {
        $this->count = $count - 1;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        $count = 1;
        
        do {
            
            $number = new Number(new TriangleNumberAtIndex($count));
            
            $count++;
        } while (count(iterator_to_array(new FactorsOf($number))) < $this->count);
        
        return $number->getValue();
    }
}
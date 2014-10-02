<?php
include_once 'LargestPossibleFactorOf.php';
include_once 'Number.php';

/**
 * Contains the FactorsOf class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class FactorsOf implements Iterator
{

    /**
     *
     * @var string
     */
    protected $highestFactorSought;

    /**
     *
     * @var ArrayIterator
     */
    protected $iterator;

    /**
     *
     * @param Number $number            
     */
    public function __construct(Number $number)
    {
        $values = array();
        
        $this->highestFactorSought = sprintf('%s', new LargestPossibleFactorOf($number));
        
        foreach ($this->getFactorPairs($number) as $pair) {
            
            $values = array_merge($values, $pair);
        }
        
        sort($values);
        
        $this->iterator = new ArrayIterator($values);
    }
    /*
     * (non-PHPdoc)
     * @see Iterator::current()
     */
    public function current()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc)
     * @see Iterator::key()
     */
    public function key()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc)
     * @see Iterator::next()
     */
    public function next()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc)
     * @see Iterator::rewind()
     */
    public function rewind()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }
    
    /*
     * (non-PHPdoc)
     * @see Iterator::valid()
     */
    public function valid()
    {
        return call_user_func(array(
            $this->iterator,
            __FUNCTION__
        ));
    }

    /**
     *
     * @return multitype:multitype:string
     */
    protected function getFactorPairs(Number $number)
    {
        $output = array();
        
        $possible = '2';
        
        while (bccomp($this->highestFactorSought, $possible) > 0) {
            
            if ($number->hasFactor($possible)) {
                
                $output[] = array(
                    $possible,
                    bcdiv($number->getValue(), $possible)
                );
            }
            
            $possible = bcadd($possible, '1');
        }
        
        return $output;
    }
}
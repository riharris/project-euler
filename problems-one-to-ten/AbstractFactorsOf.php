<?php
include_once 'AbstractIterator.php';
include_once 'FactorPairsOf.php';
include_once 'LargestPossibleFactorOf.php';
include_once 'Number.php';

/**
 * Contains the AbstractFactorsOf class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
abstract class AbstractFactorsOf extends AbstractIterator
{

    /**
     *
     * @param Number $number            
     */
    public function __construct(Number $number)
    {
        $values = array();
        
        $this->highestFactorSought = sprintf('%s', new LargestPossibleFactorOf($number));
        
        foreach (new FactorPairsOf($number) as $pair) {
            
            $values = array_merge($values, $pair);
        }
        
        $values = array_filter($values, array(
            $this,
            'isValid'
        ));
        
        sort($values);
        
        parent::__construct($values);
    }

    /**
     *
     * @param string $value            
     */
    abstract protected function isValid($value);
}
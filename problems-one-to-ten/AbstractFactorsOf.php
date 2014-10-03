<?php
include_once 'AbstractIterator.php';
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
     * @var string
     */
    protected $highestFactorSought;

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
        
        $values = array_filter($values, array(
            $this,
            'isValid'
        ));
        
        sort($values);
        
        $this->iterator = new ArrayIterator($values);
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
            
            if ($number->isMultiplierOf($possible)) {
                
                $output[] = array(
                    $possible,
                    bcdiv($number->getValue(), $possible)
                );
            }
            
            $possible = bcadd($possible, '1');
        }
        
        return $output;
    }

    /**
     *
     * @param string $value            
     */
    abstract protected function isValid($value);
}
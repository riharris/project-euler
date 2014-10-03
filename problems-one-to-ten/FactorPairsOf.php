<?php
include_once 'AbstractIterator.php';
include_once 'LargestPossibleFactorOf.php';
include_once 'Number.php';

/**
 * Contains the FactorPairsOf class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class FactorPairsOf extends AbstractIterator
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
        /**
         *
         * @var array $values
         */
        $values = array();
        
        $this->highestFactorSought = sprintf('%s', new LargestPossibleFactorOf($number));
        
        $possible = '2';
        
        while (bccomp($this->highestFactorSought, $possible) > 0) {
            
            if ($number->isMultipleOf($possible)) {
                
                $values[] = array(
                    $possible,
                    bcdiv($number->getValue(), $possible)
                );
            }
            
            $possible = bcadd($possible, '1');
        }
        
        parent::__construct($values);
    }
}
<?php
include_once 'AbstractIterator.php';
include_once 'IsPythagoreanTriplet.php';
include_once 'Number.php';

/**
 * Contains the PythagoreanTripletsHavingTotal class
 *
 * @author Richard Harrison
 * @since 6 Oct 2014
 */
class PythagoreanTripletsHavingTotal extends AbstractIterator
{

    /**
     *
     * @param int $total            
     */
    public function __construct($total)
    {
        /**
         * @var array $values
         */
        $values = array();
        
        /**
         *
         * @var int $adjacent
         */
        $adjacent = 1;
        
        while ($adjacent < $total / 2) {
            
            /**
             *
             * @var int $opposite
             */
            $opposite = 1;
            
            while ($adjacent + $opposite < $total) {
                
                /**
                 *
                 * @var int $hypotenuse
                 */
                $hypotenuse = $total - ($adjacent + $opposite);
                
                if ((boolean) strval(new IsPythagoreanTriplet($adjacent, $opposite, $hypotenuse))) {
                    
                    $values[] = sprintf('%d,%d,%d', $adjacent, $opposite, $hypotenuse);
                }
                
                $opposite ++;
            }
            
            $adjacent ++;
        }
        
        parent::__construct($values);
    }
}
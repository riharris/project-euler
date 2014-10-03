<?php
include_once 'AbstractIterator.php';

/**
 * Contains the AdjacentDigitsOfLengthFor class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class AdjacentDigitsOfLengthFor extends AbstractIterator
{

    /**
     *
     * @param int $length            
     * @param string $series            
     */
    public function __construct($length, $series)
    {
        $values = array();
        
        while (strlen($series) >= $length) {
            
            $values[] = substr($series, 0, $length);
            $series = substr($series, 1);
        }
        
        parent::__construct($values);
    }
}
<?php
include_once 'AbstractIterator.php';

/**
 * Contains the PowersOfTo class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PowersOfTo extends AbstractIterator
{

    /**
     * @param string $power
     * @param string $limit
     */
    public function __construct($power, $limit)
    {
        $values = array();
        
        for ($i = 1; $i <= $limit; $i ++) {
            
            $values[] = bcpow(strval($i), strval($power));
        }
        
        parent::__construct($values);
    }
}
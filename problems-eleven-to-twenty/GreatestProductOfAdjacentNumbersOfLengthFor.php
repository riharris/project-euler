<?php

/**
 * Contains the GreatestProductOfAdjacentNumbersOfLengthFor class
 *
 * @author Richard Harrison
 * @since 6 Oct 2014
 */
class GreatestProductOfAdjacentNumbersOfLengthFor
{

    /**
     *
     * @var string
     */
    protected $value = '0';

    /**
     *
     * @param int $length            
     * @param string $grid            
     */
    public function __construct($length, $grid)
    {
        /**
         *
         * @var array $values
         */
        $values = array();
        
        foreach (explode(PHP_EOL, $grid) as $row => $line) {
            $values[$row] = explode(' ', $line);
        }
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
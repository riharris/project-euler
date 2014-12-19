<?php

/**
 * Contains the Factorial class
 *
 * @author Richard Harrison
 * @since 19 Dec 2014
 */
class Factorial
{

    /**
     *
     * @var string
     */
    private $_output = '1';

    public function __construct($value)
    {
        while ($value > 1) {
            
            $this->_output = bcmul($this->_output, $value --);
        }
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_output;
    }
}
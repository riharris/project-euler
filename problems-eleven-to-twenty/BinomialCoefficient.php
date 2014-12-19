<?php
include_once 'Factorial.php';

/**
 * Contains the BinomialCoefficient class
 *
 * @author Richard Harrison
 * @since 19 Dec 2014
 */
class BinomialCoefficient
{

    /**
     *
     * @var string
     */
    private $_value;

    /**
     *
     * @param int $outcomes            
     * @param int $possibilities            
     */
    public function __construct($outcomes, $possibilities)
    {
        $numerator = strval(new Factorial($possibilities));
        $denominator = bcmul(strval(new Factorial($possibilities - $outcomes)), strval(new Factorial($outcomes)));
        $this->_value = bcdiv($numerator, $denominator);
    }

    public function __toString()
    {
        return $this->_value;
    }
}
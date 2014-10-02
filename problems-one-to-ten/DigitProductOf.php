<?php
include_once 'Number.php';

/**
 * Contains the DigitProduct class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class DigitProductOf
{

    /**
     *
     * @var Number
     */
    protected $number;

    /**
     *
     * @param Number $number            
     */
    public function __construct(Number $number)
    {
        $this->number = $number;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return strval(array_product(str_split($this->number->getValue())));
    }
}
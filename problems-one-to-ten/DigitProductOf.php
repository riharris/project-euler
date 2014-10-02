<?php
include_once 'Number.php';
include_once 'NumberAbstract.php';

/**
 * Contains the DigitProduct class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class DigitProductOf extends NumberAbstract
{

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return strval(array_product(str_split($this->number->getValue())));
    }
}
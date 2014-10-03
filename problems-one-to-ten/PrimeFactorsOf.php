<?php
include_once 'AbstractFactorsOf.php';
include_once 'Number.php';

/**
 * Contains the PrimeFactorsOf class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class PrimeFactorsOf extends AbstractFactorsOf
{
    /*
     * (non-PHPdoc)
     * @see AbstractFactorsOf::isValid()
     */
    protected function isValid($value)
    {
        /**
         *
         * @var Number $number
         */
        $number = new Number($value);
        
        return $number->isPrime();
    }
}
<?php
include_once 'Number.php';
include_once 'NumberAbstract.php';

/**
 * Contains the LargestPossibleFactorOf class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class LargestPossibleFactorOf extends NumberAbstract
{

    public function __toString()
    {
        return bcadd(bcsqrt($this->number->getValue(), 0), '1');
    }
}
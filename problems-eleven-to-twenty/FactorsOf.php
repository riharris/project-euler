<?php
include_once 'AbstractFactorsOf.php';

/**
 * Contains the FactorsOf class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
class FactorsOf extends AbstractFactorsOf
{
    /*
     * (non-PHPdoc)
     * @see AbstractFactorsOf::isValid()
     */
    protected function isValid($value)
    {
        return true;
    }
}
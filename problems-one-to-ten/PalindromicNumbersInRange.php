<?php
include_once 'AbstractPalindromicNumbersInRange.php';
include_once 'Number.php';

/**
 * Contains the PalindromicNumbersInRange class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PalindromicNumbersInRange extends AbstractPalindromicNumbersInRange
{
    /*
     * (non-PHPdoc) @see AbstractPalindromicNumbersInRange::isValid()
     */
    protected function isValid(Number $number)
    {
        return true;
    }
}
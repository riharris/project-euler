<?php
include_once 'AbstractPalindromicNumbersInRange.php';
include_once 'Number.php';

/**
 * Contains the PalindromicNumbersInRangeHavingThreeDigitFactors class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PalindromicNumbersInRangeHavingThreeDigitFactors extends AbstractPalindromicNumbersInRange
{
    /*
     * (non-PHPdoc) @see AbstractPalindromicNumbersInRange::isValid()
     */
    protected function isValid(Number $number)
    {
        return true;
    }
}
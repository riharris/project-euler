<?php
include_once 'AbstractPalindromicNumbersInRange.php';
include_once 'Number.php';

/**
 * Contains the PalindromicNumbersInRangeHavingTwoDigitFactors class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PalindromicNumbersInRangeHavingTwoDigitFactors extends AbstractPalindromicNumbersInRange
{
    /*
     * (non-PHPdoc) @see AbstractPalindromicNumbersInRangeHavingTwoDigitFactors::isValid()
     */
    protected function isValid(Number $number)
    {
        return true;
    }
}
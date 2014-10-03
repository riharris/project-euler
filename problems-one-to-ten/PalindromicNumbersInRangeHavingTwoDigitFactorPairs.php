<?php
include_once 'AbstractPalindromicNumbersInRange.php';
include_once 'FactorPairsOf.php';
include_once 'Number.php';

/**
 * Contains the PalindromicNumbersInRangeHavingTwoDigitFactorPairs class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PalindromicNumbersInRangeHavingTwoDigitFactorPairs extends AbstractPalindromicNumbersInRange
{
    /*
     * (non-PHPdoc) @see AbstractPalindromicNumbersInRangeHavingTwoDigitFactors::isValid()
     */
    protected function isValid(Number $number)
    {
        foreach (new FactorPairsOf($number) as $pair) {
            
            if (strlen($pair[0]) == 2 && strlen($pair[1]) == 2) {
                
                return true;
            }
        }
        
        return false;
    }
}
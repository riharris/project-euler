<?php
include_once 'AbstractPalindromicNumbersInRange.php';
include_once 'FactorPairsOf.php';
include_once 'Number.php';

/**
 * Contains the PalindromicNumbersInRangeHavingThreeDigitFactorPairs class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class PalindromicNumbersInRangeHavingThreeDigitFactorPairs extends AbstractPalindromicNumbersInRange
{
    /*
     * (non-PHPdoc) @see AbstractPalindromicNumbersInRange::isValid()
     */
    protected function isValid(Number $number)
    {
        foreach (new FactorPairsOf($number) as $pair) {
            
            if (strlen($pair[0]) == 3 && strlen($pair[1]) == 3) {
                
                return true;
            }
        }
        
        return false;
    }
}
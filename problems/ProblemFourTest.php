<?php
use Euler\DescendingPalindromicSequence;
use Euler\FactorSequence;

class ProblemFourTest extends PHPUnit_Framework_TestCase
{

    public function testConfirmOutputMatchesExpected()
    {
        $fixture = new DescendingPalindromicSequence(999 * 999, 900 * 900);
        
        $this->assertSame(906609, $fixture->forValuesMatching(array(
            $this,
            'isProductOfTwoThreeDigitNumbers'
        ))
            ->first());
    }

    public function isProductOfTwoThreeDigitNumbers($number)
    {
        foreach (explode(',', (new FactorSequence($number))->concat()) as $factor) {
            if (strlen($factor) == 3 && strlen($number / $factor) == 3) {
                return true;
            }
        }
        return false;
    }
}
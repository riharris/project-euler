<?php

class ProblemFifteenTest extends PHPUnit_Framework_TestCase
{

    /**
     * http://mathworld.wolfram.com/BinomialCoefficient.html
     *
     * The number of lattice paths from the origin (0,0) to a point (a,b) is the binomial coefficient (a+b; a) (Hilton and Pedersen 1991)
     */
    public function testConfirmOutputMatchesExpected()
    {
        $gridSize = 20;
        
        $this->assertSame('137846528820', bcdiv($this->getFactorial(2 * $gridSize), bcmul($this->getFactorial($gridSize), $this->getFactorial($gridSize))));
    }

    public function getFactorial($number)
    {
        $output = '1';
        while ($number > 1) {
            $output = bcmul($output, $number --);
        }
        return $output;
    }
}
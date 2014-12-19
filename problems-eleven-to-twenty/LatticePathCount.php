<?php
include_once 'BinomialCoefficient.php';

/**
 * Contains the LatticePathCount class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticePathCount
{

    /**
     *
     * @var string
     */
    protected $count;

    /**
     *
     * @param int $scale            
     */
    public function __construct($scale)
    {
        /**
         * http://mathworld.wolfram.com/BinomialCoefficient.html
         *
         * The number of lattice paths from the origin (0,0) to a point (a,b) is the binomial coefficient (a+b; a) (Hilton and Pedersen 1991)
         */
        $this->count = strval(new BinomialCoefficient($scale, $scale + $scale));
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->count;
    }
}
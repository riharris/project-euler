<?php

/**
 * Contains the IsPythagoreanTriplet class
 *
 * @author Richard Harrison
 * @since 6 Oct 2014
 */
class IsPythagoreanTriplet
{

    /**
     *
     * @var int
     */
    protected $adjacent;

    /**
     *
     * @var int
     */
    protected $hypotenuse;

    /**
     *
     * @var int
     */
    protected $opposite;

    /**
     *
     * @param int $adjacent            
     * @param int $opposite            
     * @param int $hypotenuse            
     */
    public function __construct($adjacent, $opposite, $hypotenuse)
    {
        $this->adjacent = $adjacent;
        $this->hypotenuse = $hypotenuse;
        $this->opposite = $opposite;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        if (pow($this->adjacent, 2) + pow($this->opposite, 2) == pow($this->hypotenuse, 2)) {
            
            return '1';
        } else {
            
            return '0';
        }
    }
}
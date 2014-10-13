<?php

/**
 * Contains the TriangleNumberAtIndex class
 *
 * @author Richard Harrison
 * @since 13 Oct 2014
 */
class TriangleNumberAtIndex
{

    /**
     *
     * @var Number
     */
    protected $number;

    /**
     *
     * @param int $index            
     */
    public function __construct($index)
    {
        $this->number = new Number(($index * ($index + 1)) / 2);
    }

    public function __toString()
    {
        return $this->number->getValue();
    }
}
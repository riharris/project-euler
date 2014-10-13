<?php

/**
 * Contains the NumberAbstract class
 *
 * @author Richard Harrison
 * @since 2 Oct 2014
 */
abstract class NumberAbstract
{

    /**
     *
     * @var Number
     */
    protected $number;

    /**
     *
     * @param Number $number            
     */
    public function __construct(Number $number)
    {
        $this->number = $number;
    }
}
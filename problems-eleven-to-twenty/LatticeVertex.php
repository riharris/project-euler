<?php

/**
 * Contains the LatticeVertex class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticeVertex
{

    /**
     *
     * @var array
     */
    protected $connections;

    /**
     *
     * @var int
     */
    protected $index;

    /**
     *
     * @param int $index            
     * @param array $connections            
     */
    public function __construct($index, array $connections)
    {
        $this->index = $index;
        $this->connections = $connections;
    }

    /**
     *
     * @param LatticeVertex $other            
     */
    public function connectsTo(LatticeVertex $other)
    {
        return in_array($other->getIndex(), $this->connections);
    }

    /**
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }
}
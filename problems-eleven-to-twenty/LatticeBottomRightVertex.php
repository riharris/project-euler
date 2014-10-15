<?php
include_once 'LatticeVertex.php';

/**
 * Contains the LatticeBottomRightVertex class
 *
 * @author Richard Harrison
 * @since 15 Oct 2014
 */
class LatticeBottomRightVertex extends LatticeVertex
{

    /**
     *
     * @param int $index            
     * @param int $scale            
     */
    public function __construct($index, $scale)
    {
        parent::__construct($index, array());
    }
}
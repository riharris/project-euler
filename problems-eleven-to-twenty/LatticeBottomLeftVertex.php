<?php
include_once 'LatticeVertex.php';

/**
 * Contains the LatticeBottomLeftVertex class
 *
 * @author Richard Harrison
 * @since 15 Oct 2014
 */
class LatticeBottomLeftVertex extends LatticeVertex
{

    /**
     *
     * @param int $index            
     * @param int $scale            
     */
    public function __construct($index, $scale)
    {
        parent::__construct($index, array(
            ++ $index
        ));
    }
}
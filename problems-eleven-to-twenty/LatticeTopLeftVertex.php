<?php
include_once 'LatticeVertex.php';

/**
 * Contains the LatticeTopLeftVertex class
 *
 * @author Richard Harrison
 * @since 15 Oct 2014
 */
class LatticeTopLeftVertex extends LatticeVertex
{

    /**
     *
     * @param int $index            
     * @param int $scale            
     */
    public function __construct($index, $scale)
    {
        parent::__construct($index, array(
            ++ $index,
            $index + $scale
        ));
    }
}
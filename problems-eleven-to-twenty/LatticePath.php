<?php
include_once 'LatticeVertex.php';

/**
 * Contains the LatticePath class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticePath
{

    /**
     *
     * @var LatticeVertex[]
     */
    protected $vertices = array();

    /**
     *
     * @param
     *            LatticeVertex [Optional, defaults to null] $start
     */
    public function __construct(LatticeVertex $start = null)
    {
        if ($start instanceof LatticeVertex) {
            
            $this->vertices[] = $start;
        }
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        
        /**
         *
         * @var string $output
         */
        $output = '';
        
        foreach ($this->vertices as $vertex) {
            
            $output .= (strlen($output)) ? sprintf('-%d', $vertex->getIndex()) : sprintf('%d', $vertex->getIndex());
        }
        
        return $output;
    }

    /**
     *
     * @param LatticeVertex $vertex            
     * @return self
     */
    public function append(LatticeVertex $vertex)
    {
        $this->vertices[] = $vertex;
        return $this;
    }

    /**
     *
     * @param LatticeVertex $vertex            
     */
    public function continuesWith(LatticeVertex $vertex)
    {
        
        /**
         *
         * @var LatticeVertex $test
         */
        $test = end($this->vertices);
        
        return $test->connectsTo($vertex);
    }

    /**
     *
     * @param int $index            
     * @return boolean
     */
    public function hasEndIndex($index)
    {
        
        /**
         *
         * @var LatticeVertex $test
         */
        $test = end($this->vertices);
        
        return ($index == $test->getIndex()) ? true : false;
    }
}    

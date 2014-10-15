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
     * @var string
     */
    protected $path = '';

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
        return $this->path;
    }

    /**
     *
     * @param LatticeVertex $vertex            
     * @return self
     */
    public function append(LatticeVertex $vertex)
    {
        $this->vertices[] = $vertex;
        $this->refreshPath();
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

    /**
     * @return void 
     */
    protected function refreshPath()
    {
        $this->path = '';
        
        foreach ($this->vertices as $vertex) {
            
            $this->path .= (strlen($this->path)) ? sprintf('-%d', $vertex->getIndex()) : sprintf('%d', $vertex->getIndex());
        }
    }
}    

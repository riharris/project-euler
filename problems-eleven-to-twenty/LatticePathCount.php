<?php
include_once 'LatticePath.php';
include_once 'LatticeBottomLeftVertex.php';
include_once 'LatticeBottomRightVertex.php';
include_once 'LatticeTopLeftVertex.php';
include_once 'LatticeTopRightVertex.php';

/**
 * Contains the LatticePathCount class
 *
 * @author Richard Harrison
 * @since 14 Oct 2014
 */
class LatticePathCount
{
    
    /**
     * @var int
     */
    protected $count = 0;

    /**
     *
     * @param int $scale            
     */
    public function __construct($scale)
    {
        /**
         *
         * @var int $index
         */
        $index = 0;
        
        /**
         *
         * @var LatticeVertex[] $vertices
         */
        $vertices = array();
        
        for ($x = $scale; $x >= 0; $x --) {
            
            for ($y = $scale; $y >= 0; $y --) {
                
                if ($x > 0 && $y > 0) {
                    
                    $vertices[] = new LatticeTopLeftVertex($index, $scale);
                } elseif ($x > 0) {
                    
                    $vertices[] = new LatticeTopRightVertex($index, $scale);
                } elseif ($y > 0) {
                    
                    $vertices[] = new LatticeBottomLeftVertex($index, $scale);
                } else {
                    
                    $vertices[] = new LatticeBottomRightVertex($index, $scale);
                }
                $index ++;
            }
        }
        
        /**
         *
         * @var LatticePath[] $paths
         */
        $paths = array(
            new LatticePath(array_shift($vertices))
        );
        
        foreach ($vertices as $vertex) {
            
            $newPaths = array();
            
            foreach ($paths as $key => $path) {
                
                if ($this->isDeadEnd($path, $vertex, $scale)) {
                    
                    unset($paths[$key]);
                } elseif ($path->continuesWith($vertex)) {
                    
                    $newPath = clone $path;
                    
                    if ($newPath->append($vertex)->hasEndIndex($index - 1)) {
                        
                        $this->count++;
                        
                    } else {
                        
                        $newPaths[] = $newPath;
                    }
                    
                }
            }
            
            $paths = array_merge($paths, $newPaths);
        }
    }
    
    /**
     * @return string
     */
    public function __toString() {
        
        return strval($this->count);
    }

    /**
     *
     * @param LatticePath $path            
     * @param LatticeVertex $vertex            
     * @param int $scale            
     * @return boolean
     */
    protected function isDeadEnd($path, $vertex, $scale)
    {
        return $path->hasEndIndex($vertex->getIndex() - ($scale + $scale + 1));
    }
}
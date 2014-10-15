<?php
include_once 'AbstractIterator.php';
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
class LatticePathCount extends AbstractIterator
{

    /**
     * @param int $scale
     */
    public function __construct($scale)
    {
        /**
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
            
            foreach ($paths as $path) {
                
                if ($path->continuesWith($vertex)) {
                    
                    $newPath = clone $path;
                    $newPaths[] = $newPath->append($vertex);
                }
            }
            
            $paths = array_merge($paths, $newPaths);
        }
        
        $values = array();
        
        foreach ($paths as $path) {
            
            if ($path->hasEndIndex($index - 1)) {
                
                $values[] = $path;
            }
        }
        
        parent::__construct($values);
    }
}
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

    public function __construct($scale)
    {
        $vertices = array(
            new LatticeTopLeftVertex(0, $scale),
            new LatticeTopLeftVertex(1, $scale),
            new LatticeTopRightVertex(2, $scale),
            new LatticeTopLeftVertex(3, $scale),
            new LatticeTopLeftVertex(4, $scale),
            new LatticeTopRightVertex(5, $scale),
            new LatticeBottomLeftVertex(6, $scale),
            new LatticeBottomLeftVertex(7, $scale),
            new LatticeBottomRightVertex(8, $scale)
        );
        
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
            
            if ($path->hasEndIndex(8)) {
                
                $values[] = $path;
            }
        }
        
        parent::__construct($values);
    }
}
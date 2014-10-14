<?php
include_once 'AbstractIterator.php';
include_once 'LatticePath.php';
include_once 'LatticeVertex.php';

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
            new LatticeVertex(0, array(
                1,
                3
            )),
            new LatticeVertex(1, array(
                2,
                4
            )),
            new LatticeVertex(2, array(
                5
            )),
            new LatticeVertex(3, array(
                4,
                6
            )),
            new LatticeVertex(4, array(
                5,
                7
            )),
            new LatticeVertex(5, array(
                8
            )),
            new LatticeVertex(6, array(
                7
            )),
            new LatticeVertex(7, array(
                8
            ))
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
            
            if ($path->hasEndIndex(7)) {
                
                $values[] = $path;
            }
        }
        
        parent::__construct($values);
    }
}
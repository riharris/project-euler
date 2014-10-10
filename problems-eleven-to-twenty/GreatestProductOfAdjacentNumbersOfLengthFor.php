<?php
include_once 'GridEntry.php';

/**
 * Contains the GreatestProductOfAdjacentNumbersOfLengthFor class
 *
 * @author Richard Harrison
 * @since 6 Oct 2014
 */
class GreatestProductOfAdjacentNumbersOfLengthFor
{

    /**
     *
     * @var int
     */
    protected $length;

    /**
     *
     * @var GridEntry[] $values
     */
    protected $values = array();

    /**
     *
     * @param int $length            
     * @param string $grid            
     */
    public function __construct($length, $grid)
    {
        foreach (explode(PHP_EOL, $grid) as $row => $line) {
            foreach (explode(' ', $line) as $column => $value) {
                
                $this->values[] = new GridEntry($column, $row, $value);
            }
        }
        
        $this->length = $length;
    }

    /**
     *
     * @return number
     */
    protected function getMaxHorizontalProduct()
    {
        /**
         *
         * @var int $output
         */
        $output = 0;
        
        foreach ($this->values as $start) {
            
            /**
             *
             * @var int $product
             */
            $product = $start->value;
            
            foreach ($this->values as $next) {
                
                if ($next->sharesRow($start, $this->length) && $next->column > $start->column) {
                    
                    $product *= $next->value;
                }
            }
            
            $output = max($output, $product);
        }
        
        return $output;
    }

    /**
     *
     * @return number
     */
    protected function getMaxMajorDiagonalProduct()
    {
        /**
         *
         * @var int $output
         */
        $output = 0;
        
        foreach ($this->values as $start) {
            
            /**
             *
             * @var int $product
             */
            $product = $start->value;
            
            foreach ($this->values as $next) {
                
                if ($next->sharesMajorDiagonal($start, $this->length) && $next->column > $start->column) {
                    
                    $product *= $next->value;
                }
            }
            
            $output = max($output, $product);
        }
        
        return $output;
    }

    /**
     *
     * @return number
     */
    protected function getMaxMinorDiagonalProduct()
    {
        /**
         *
         * @var int $output
         */
        $output = 0;
        
        foreach ($this->values as $start) {
            
            /**
             *
             * @var int $product
             */
            $product = $start->value;
            
            foreach ($this->values as $next) {
                
                if ($next->sharesMinorDiagonal($start, $this->length) && $next->column > $start->column) {
                    
                    $product *= $next->value;
                }
            }
            
            $output = max($output, $product);
        }
        
        return $output;
    }

    /**
     *
     * @return number
     */
    protected function getMaxVerticalProduct()
    {
        /**
         *
         * @var int $output
         */
        $output = 0;
        
        foreach ($this->values as $start) {
            
            /**
             *
             * @var int $product
             */
            $product = $start->value;
            
            foreach ($this->values as $next) {
                
                if ($next->sharesColumn($start, $this->length) && $next->row > $start->row) {
                    
                    $product *= $next->value;
                }
            }
            
            $output = max($output, $product);
        }
        
        return $output;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        /**
         *
         * @var int $sum1
         */
        $sum1 = $this->getMaxMajorDiagonalProduct();
        
        /**
         *
         * @var int $sum2
         */
        $sum2 = $this->getMaxMinorDiagonalProduct();
        
        /**
         *
         * @var int $sum3
         */
        $sum3 = $this->getMaxHorizontalProduct();
        
        /**
         *
         * @var int $sum4
         */
        $sum4 = $this->getMaxVerticalProduct();
        
        return strval(max(max($sum1, $sum2), max($sum3, $sum4)));
    }
}
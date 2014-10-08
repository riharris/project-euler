<?php

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
     * @var string
     */
    protected $value = '0';

    /**
     *
     * @param int $length            
     * @param string $grid            
     */
    public function __construct($length, $grid)
    {
        /**
         *
         * @var array $values
         */
        $values = array();
        
        foreach (explode(PHP_EOL, $grid) as $line) {
            $values[] = explode(' ', $line);
        }
        
        /**
         *
         * @var int $sum1
         */
        $sum1 = $this->getMaxUpDiagonalProduct($values, $length);
        
        /**
         *
         * @var int $sum2
         */
        $sum2 = $this->getMaxDownDiagonalProduct($values, $length);
        
        /**
         *
         * @var int $sum3
         */
        $sum3 = $this->getMaxHorizontalProduct($values, $length);
        
        /**
         *
         * @var int $sum4
         */
        $sum4 = $this->getMaxVerticalProduct($values, $length);
        
        $this->value = strval(max(max($sum1, $sum2), max($sum3, $sum4)));
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @return number
     */
    protected function getMaxDownDiagonalProduct(array $values, $length)
    {
        return 1;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @return number
     */
    protected function getMaxHorizontalProduct(array $values, $length)
    {
        $output = 0;
        
        foreach ($values as $row) {
            
            while (count($row) > $length) {
                
                $output = max($output, array_product(array_slice($row, 0, $length)));
                array_shift($row);
            }
        }
        
        return $output;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @return number
     */
    protected function getMaxUpDiagonalProduct(array $values, $length)
    {
        return 1;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @return number
     */
    protected function getMaxVerticalProduct(array $values, $length)
    {
        $output = 0;
        
        foreach ($this->transpose($values) as $row) {
            
            while (count($row) > $length) {
                
                $output = max($output, array_product(array_slice($row, 0, $length)));
                array_shift($row);
            }
        }
        
        return $output;
    }

    /**
     *
     * @param array $values            
     * @return array
     */
    protected function transpose($values)
    {
        array_unshift($values, null);
        return call_user_func_array('array_map', $values);
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
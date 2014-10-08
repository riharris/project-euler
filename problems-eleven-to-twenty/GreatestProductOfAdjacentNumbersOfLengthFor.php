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
        
        foreach (explode(PHP_EOL, $grid) as $row => $line) {
            foreach (explode(' ', $line) as $column => $value) {
                $values[sprintf('%d:%d', $row, $column)] = $value;
            }
        }
        
        /**
         *
         * @var int $sum1
         */
        $sum1 = $this->getMaxUpDiagonalSum($values, $length, max($row, $column));
        
        /**
         *
         * @var int $sum2
         */
        $sum2 = $this->getMaxDownDiagonalSum($values, $length, max($row, $column));
        
        /**
         *
         * @var int $sum3
         */
        $sum3 = $this->getMaxHorizontalSum($values, $length, $row);
        
        /**
         *
         * @var int $sum4
         */
        $sum4 = $this->getMaxVerticalSum($values, $length, $column);
        
        $this->value = strval(max(max($sum1, $sum2), max($sum3, $sum4)));
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @param int $range            
     * @return number
     */
    public function getMaxDownDiagonalSum(array $values, $length, $range)
    {
        return 1;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @param int $range            
     * @return number
     */
    public function getMaxHorizontalSum(array $values, $length, $range)
    {
        return 1;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @param int $range            
     * @return number
     */
    public function getMaxUpDiagonalSum(array $values, $length, $range)
    {
        return 1;
    }

    /**
     *
     * @param array $values            
     * @param int $length            
     * @param int $range            
     * @return number
     */
    public function getMaxVerticalSum(array $values, $length, $range)
    {
        return 1;
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
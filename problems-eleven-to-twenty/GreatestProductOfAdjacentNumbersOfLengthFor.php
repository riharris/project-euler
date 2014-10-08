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
     * @var int
     */
    protected $maxColumn;

    /**
     *
     * @var int
     */
    protected $maxRow;

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
        $this->maxColumn = $column;
        $this->maxRow = $row;
    }

    /**
     *
     * @return number
     */
    protected function getMaxDownDiagonalProduct()
    {
        return 1;
    }

    /**
     *
     * @return number
     */
    protected function getMaxHorizontalProduct()
    {
        return 1;
    }

    /**
     *
     * @return number
     */
    protected function getMaxUpDiagonalProduct()
    {
        return 1;
    }

    /**
     *
     * @return number
     */
    protected function getMaxVerticalProduct()
    {
        return 1;
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
        $sum1 = $this->getMaxUpDiagonalProduct();
        
        /**
         *
         * @var int $sum2
         */
        $sum2 = $this->getMaxDownDiagonalProduct();
        
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
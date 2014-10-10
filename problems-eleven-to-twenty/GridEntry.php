<?php

/**
 * Contains the GridEntry class
 *
 * @author Richard Harrison
 * @since 8 Oct 2014
 */
class GridEntry
{

    /**
     *
     * @var int
     */
    public $column;

    /**
     *
     * @var int
     */
    public $row;

    /**
     *
     * @var int
     */
    public $value;

    /**
     *
     * @param int $column            
     * @param int $row            
     * @param int $value            
     */
    public function __construct($column, $row, $value)
    {
        $this->column = $column;
        $this->row = $row;
        $this->value = $value;
    }

    /**
     *
     * @param GridEntry $entry            
     * @param int $maxDistance            
     * @return boolean
     */
    public function sharesColumn(GridEntry $entry, $maxDistance)
    {
        if ($this->column == $entry->column && abs($this->row - $entry->row) <= $maxDistance) {
            
            return true;
        } else {
            
            return false;
        }
    }

    /**
     *
     * @param GridEntry $entry            
     * @param int $maxDistance            
     * @return boolean
     */
    public function sharesMajorDiagonal(GridEntry $entry, $maxDistance)
    {
        for ($i = - $maxDistance; $i <= $maxDistance; $i ++) {
            
            if (($this->column + $i == $entry->column) && ($this->row + $i == $entry->row)) {
                return true;
            }
        }
        return false;
    }

    /**
     *
     * @param GridEntry $entry            
     * @param int $maxDistance            
     * @return boolean
     */
    public function sharesMinorDiagonal(GridEntry $entry, $maxDistance)
    {
        for ($i = - $maxDistance; $i <= $maxDistance; $i ++) {
            
            if (($this->column - $i == $entry->column) && ($this->row + $i == $entry->row)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     *
     * @param GridEntry $entry            
     * @param int $maxDistance            
     * @return boolean
     */
    public function sharesRow(GridEntry $entry, $maxDistance)
    {
        if ($this->row == $entry->row && abs($this->column - $entry->column) <= $maxDistance) {
            
            return true;
        } else {
            
            return false;
        }
    }
}
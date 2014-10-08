<?php

/**
 * Contains the GridEntry class
 *
 * @author Richard Harrison
 * @since 8 Oct 2014
 */
class GridEntry {
    
    /**
     * @var int
     */
    public $column;
    
    /**
     * @var int
     */
    public $row;
    
    /**
     * @var int
     */
    public $value;

	/**
	 * @param int $column
	 * @param int $row
	 * @param int $value
	 */
	public function __construct($column, $row, $value) {
	    
	    $this->column = $column;
	    $this->row = $row;
	    $this->value = $value;
	}

}
<?php
include_once 'Number.php';

/**
 * Contains the FactorsOfBelowLimit class
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
class FactorsOfBelowLimit extends AbstractFactorsOf
{

    /**
     *
     * @var int
     */
    protected $limit;

    /**
     *
     * @param Number $number            
     * @param int $limit            
     */
    public function __construct(Number $number, $limit)
    {
        $this->limit = $limit;
        parent::__construct($number);
    }
    
    /*
     * (non-PHPdoc) @see AbstractFactorsOf::isValid()
     */
    protected function isValid($value)
    {
        if ($value <= $this->limit) {
            
            return true;
        } else {
            
            return false;
        }
    }
}
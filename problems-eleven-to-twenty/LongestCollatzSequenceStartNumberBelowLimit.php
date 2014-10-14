<?php

/**
 * Contains the LongestCollatzSequenceStartNumberBelowLimit class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 14 Oct 2014
 */
class LongestCollatzSequenceStartNumberBelowLimit
{

    /**
     *
     * @var int
     */
    protected $limit;

    /**
     *
     * @var string
     */
    protected $sequenceLength = '1';

    /**
     *
     * @var string
     */
    protected $startNumber = '1';

    /**
     *
     * @param int $limit            
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $i = 2;
        
        while ($i < $this->limit) {
            
            /**
             *
             * @var string $sequenceLength
             */
            $sequenceLength = strval(new CollatzSequenceLengthOf(new Number($i)));
            
            if (bccomp($sequenceLength, $this->sequenceLength) == 1) {
                
                $this->sequenceLength = $sequenceLength;
                $this->startNumber = strval($i);
            }
            
            $i ++;
        }
        
        return $this->startNumber;
    }
}

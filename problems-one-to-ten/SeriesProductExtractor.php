<?php
include_once 'Number.php';

/**
 * Contains the SeriesProductExtractor class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 9 Nov 2013
 */
class SeriesProductExtractor
{

    /**
     *
     * @var int
     */
    private $_segmentLength;

    /**
     *
     * @var string
     */
    private $_series;

    /**
     *
     * @param string $series            
     * @param int $segmentLength            
     */
    public function __construct($series, $segmentLength)
    {
        $this->_segmentLength = $segmentLength;
        $this->_series = $series;
    }

    public function getSegmentHavingGreatestProduct()
    {
        $segment = $this->_series;
        
        while (strlen($segment) > $this->_segmentLength) {
            
            $number1 = new Number(substr($segment, 0, 5));
            $number2 = new Number(substr($segment, 1, 5));
            
            if ($number1->getDigitProduct() > $number2->getDigitProduct()) {
                
                $segment = $number1->getValue() . substr($segment, 6);
            } else {
                $segment = $number2->getValue() . substr($segment, 6);
            }
        }
        
        return $segment;
    }
}

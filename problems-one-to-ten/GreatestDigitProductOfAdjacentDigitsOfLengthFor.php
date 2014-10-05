<?php
include_once 'DigitProductOf.php';
include_once 'Number.php';

/**
 * Contains the GreatestDigitProductOfAdjacentDigitsOfLengthFor class
 *
 * @author Richard Harrison
 * @since 5 Oct 2014
 */
class GreatestDigitProductOfAdjacentDigitsOfLengthFor
{

    /**
     *
     * @var string
     */
    protected $value = '0';

    /**
     *
     * @param int $length            
     * @param string $series            
     */
    public function __construct($length, $series)
    {
        while (strlen($series) >= $length) {
            
            $value = substr($series, 0, $length);
            
            if (bccomp(strval(new DigitProductOf(new Number($value))), strval(new DigitProductOf(new Number($this->value)))) == 1) {
                
                $this->value = $value;
            }
            
            $series = substr($series, 1);
        }
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
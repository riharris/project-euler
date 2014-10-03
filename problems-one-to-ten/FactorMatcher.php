<?php

/**
 * Contains the FactorMatcher class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 3 Nov 2013
 */
class FactorMatcher
{

    private $_messages = array();

    private $_pattern = array();

    public function getFirstInstance()
    {
        $largestFactorSought = array_reduce($this->_pattern, array(
            $this,
            '_returnLarger'
        ), '0');
        
        $step = strval(array_product(array_filter($this->_pattern, array(
            $this,
            '_isPrime'
        ))));
        
        $number = $step;
        
        $instance = new Number($number);
        
        while ($instance->setLargestFactorSought($largestFactorSought)->getFactors() != $this->_pattern) {
            
            $number = bcadd($number, $step);
            
            $instance = new Number($number);
        }
        
        return $number;
    }

    public function setPattern(array $pattern)
    {
        $this->_pattern = array_map('strval', $pattern);
        return $this;
    }

    private function _getLargestLikelyFactor($number)
    {
        return bcadd(bcsqrt($number, 0), '1');
    }

    private function _isFactor($quotient, $divisor)
    {
        if ('0' == bcmod($quotient, $divisor)) {
            return true;
        } else {
            
            return false;
        }
    }

    private function _isPrime($number)
    {
        if ($number == '1') {
            return false;
        } elseif ($number == '2') {
            return true;
        } elseif ($this->_isFactor($number, '2')) {
            return false;
        } else {
            
            $max = $this->_getLargestLikelyFactor($number);
            
            $i = '3';
            
            while (bccomp($max, $i) > 0) {
                
                if ($this->_isFactor($number, $i)) {
                    
                    $this->_messages[] = sprintf('Factor %s is divisible by %s', $number, $i);
                    return false;
                }
                
                $i = bcadd($i, '2');
            }
            
            return true;
        }
    }

    private function _returnLarger($x, $y)
    {
        return (bccomp($x, $y) > 0) ? $x : $y;
    }
}

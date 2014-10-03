<?php
include_once 'NumberInterface.php';
include_once 'LargestPossibleFactorOf.php';

/**
 * Contains the Number class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @see http://stackoverflow.com/questions/16763322/a-formula-to-find-prime-numbers-in-a-loop
 * @since 1 Nov 2013
 */
class Number implements NumberInterface
{

    /**
     *
     * @var string
     */
    protected $value;

    /**
     *
     * @param mixed $value            
     */
    public function __construct($value)
    {
        $this->value = strval($value);
    }

    public function getSumOfPowers($power)
    {
        $output = '0';
        
        $count = '1';
        
        while (bccomp($this->value, $count) >= 0) {
            
            $output = bcadd($output, bcpow($count, $power));
            $count = bcadd($count, '1');
        }
        
        return $output;
    }

    /**
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *
     * @param mixed $factor            
     * @return boolean
     */
    public function isMultipleOf($factor)
    {
        if ('0' == bcmod($this->value, strval($factor))) {
            return true;
        } else {
            
            return false;
        }
    }

    /**
     *
     * @return boolean
     */
    public function isPalindromic()
    {
        if ($this->value == strrev($this->value)) {
            
            return true;
        } else {
            
            return false;
        }
    }

    /**
     *
     * @return boolean
     */
    public function isPrime()
    {
        if ($this->value == '1') {
            return false;
        } elseif ($this->value == '2') {
            return true;
        } elseif ($this->isMultipleOf(2)) {
            return false;
        } else {
            
            /**
             *
             * @var string $max
             */
            $max = strval(new LargestPossibleFactorOf($this));
            
            /**
             *
             * @var $i
             */
            $i = '3';
            
            while (bccomp($max, $i) > 0) {
                
                if ($this->isMultipleOf($i)) {
                    
                    return false;
                }
                
                $i = bcadd($i, '2');
            }
            
            return true;
        }
    }
}

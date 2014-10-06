<?php
include_once 'Number.php';

/**
 * Contains the TotalPrimesTo class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2014
 * @since 6 Oct 2014
 */
class TotalPrimesTo
{

    /**
     *
     * @var string
     */
    protected $total = '2';

    /**
     *
     * @param int $limit            
     */
    public function __construct($limit)
    {
        for ($i = 3; $i < $limit; $i = $i + 2) {
            
            if (call_user_func(array(
                new Number($i),
                'isPrime'
            ))) {
                
                $this->total = bcadd($this->total, sprintf('%d', $i));
            }
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->total;
    }
}
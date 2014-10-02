<?php

/**
 * Contains the Number class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @see http://stackoverflow.com/questions/16763322/a-formula-to-find-prime-numbers-in-a-loop
 * @since 1 Nov 2013
 */
class Number {

	private $_largestFactorSought;

	private $_messages = array();

	private $_value;

	/**
	 * @param string $value
	 */
	public function __construct($value){

		$this->_largestFactorSought = $this->_getLargestLikelyFactor($this->_value);
		$this->_value = $value;
	}

	public function getSumOfPowers($power){

		$output = '0';

		$count = '1';

		while(bccomp($this->_value, $count) >= 0){

			$output = bcadd($output, bcpow($count, $power));
			$count = bcadd($count, '1');
		}

		return $output;
	}

	public function getFactorPairs(){

		$output = array();

		$possible = '2';

		while(bccomp($this->_largestFactorSought, $possible) > 0){

			if($this->_isFactor($this->_value, $possible)){

				$output[] = array($possible, bcdiv($this->_value, $possible));
			}

			$possible = bcadd($possible, '1');
		}

		return $output;
	}

	/**
	 * @return array
	 */
	public function getFactors(){

		$output = array();

		foreach ($this->getFactorPairs() as $pair){

			$output = array_merge($output, $pair);
		}

		sort($output);

		return array_unique(array_filter($output, array($this, '_isLessThanOrEqualToLargestFactorSought')));
	}

	public function getPrimeFactors(){

		return array_values(array_filter($this->getFactors(), array($this, '_isPrime')));
	}

	public function getMessages(){

		return $this->_messages;
	}

	/**
	 * @return string
	 */
	public function getValue() {

		return $this->_value;
	}

	/**
	 * @return boolean
	 */
	public function isPrime(){

		return $this->_isPrime($this->_value);
	}

	public function setLargestFactorSought($number){

		$this->_largestFactorSought = bcadd($number, '1');
		return $this;
	}

	private function _getLargestLikelyFactor($number){

		return bcadd(bcsqrt($number, 0), '1');
	}

	private function _isFactor($quotient, $divisor){

		if('0' == bcmod($quotient, $divisor)){
			return true;
		}
		else{

			return false;
		}
	}

	private function _isLessThanOrEqualToLargestFactorSought($number){

		return (bccomp($number, $this->_largestFactorSought) <= 0)?true:false;
	}

	private function _isPrime($number){

		if($number == '1'){
			return false;
		}
		elseif($number == '2'){
			return true;
		}
		elseif($this->_isFactor($number, '2')){
			return false;
		}
		else{

			$max = $this->_getLargestLikelyFactor($number);

			$i = '3';

			while(bccomp($max, $i) > 0){

				if($this->_isFactor($number, $i)){

					$this->_messages[] = sprintf('Factor %s is divisible by %s', $number, $i);
					return false;
				}

				$i = bcadd($i, '2');
			}

			return true;
		}
	}
}

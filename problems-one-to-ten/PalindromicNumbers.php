<?php

include_once 'Number.php';

/**
 * Contains the PalindromicNumbers class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 2 Nov 2013
 */
class PalindromicNumbers {

	/**
	 * @var int
	 */
	private $_lower;

	/**
	 * @var int
	 */
	private $_maxCount;

	/**
	 * @var array
	 */
	private $_messages = array();

	/**
	 * @var int
	 */
	private $_upper;

	/**
	 * @return array
	 */
	public function getMessages(){

		return $this->_messages;
	}

	/**
	 * @return array
	 */
	public function getNumbersInRange(){

		$output = array();

		/**
		 * The palindrome can be written as: abccba
		 *
		 * Which then simpifies to: 100000a + 10000b + 1000c + 100c + 10b + a
		 * And then: 100001a + 10010b + 1100c
		 * Factoring out 11, you get: 11(9091a + 910b + 100c)
		 *
		 * Meaning that the palindrome must be divisible by 11, so once
		 * we locate one, we can increase the step count to 11 and still not miss any
		 */
		$step = - 1;

		for($i = $this->_upper;$i >= $this->_lower;$i += $step){

			if($this->_isPalindromic($i)){

				$output[] = $i;
				$step = - 11;
			}

			if(! is_null($this->_maxCount) && count($output) >= $this->_maxCount){

				break;
			}
		}

		return $output;
	}

	public function getNumbersInRangeHavingThreeDigitFactorPairs(){

		return array_values(array_filter($this->getNumbersInRange(), array($this, '_hasThreeDigitFactorPairs')));
	}

	public function getNumbersInRangeHavingTwoDigitFactorPairs(){

		return array_values(array_filter($this->getNumbersInRange(), array($this, '_hasTwoDigitFactorPairs')));
	}

	public function setLowerLimit($lower){

		$this->_lower = $lower;
		return $this;
	}

	public function setMaxResults($maxCount){

		$this->_maxCount = $maxCount;
		return $this;
	}

	public function setUpperLimit($upper){

		$this->_upper = $upper;
		return $this;
	}

	/**
	 * @param int $number
	 * @return boolean
	 */
	private function _hasThreeDigitFactorPairs($number){

		$instance = new Number($number);

		if(count(array_filter($instance->getFactorPairs(), array($this, '_isThreeDigitFactorPair')))){

			return true;
		}
		else{

			return false;
		}
	}

	/**
	 * @param int $number
	 * @return boolean
	 */
	private function _hasTwoDigitFactorPairs($number){

		$instance = new Number($number);

		if(count(array_filter($instance->getFactorPairs(), array($this, '_isTwoDigitFactorPair')))){

			return true;
		}
		else{

			return false;
		}
	}

	/**
	 * @param int $number
	 * @return boolean
	 */
	private function _isPalindromic($number){

		if(strval($number) == strrev($number)){

			return true;
		}
		else{

			return false;
		}
	}

	/**
	 * @param array $pair
	 * @return boolean
	 */
	private function _isTwoDigitFactorPair(array $pair){

		if($pair[0] >= 10 && $pair[0] <= 99 && $pair[1] >= 10 && $pair[1] <= 99){

			return true;
		}
		else{

			return false;
		}
	}

	/**
	 * @param array $pair
	 * @return boolean
	 */
	private function _isThreeDigitFactorPair(array $pair){

		if($pair[0] >= 100 && $pair[0] <= 999 && $pair[1] >= 100 && $pair[1] <= 999){

			$this->_messages[] = sprintf('Pair %d and %d found', $pair[0], $pair[1]);
			return true;
		}
		else{

			return false;
		}
	}
}

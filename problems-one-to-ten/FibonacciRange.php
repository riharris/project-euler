<?php

/**
 * Contains the FibonacciRange class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class FibonacciRange {

	/**
	 * @var int
	 */
	private $_limit;

	/**
	 * @param int $limit
	 */
	public function __construct($limit){

		$this->_limit = $limit;
	}

	/**
	 * @return array
	 */
	public function getEvenValues(){

		$output = array();

		$odds = array(1, 1);

		while(array_sum($odds) <= $this->_limit){

			$output[] = array_sum($odds);

			$odds = $this->_getNextTwoOddNumbersAssumingOOEOOESequence($odds);
		}

		return $output;
	}

	/**
	 * @return array
	 */
	public function getValues(){

		$output = array(1, 1);

		while($this->_getNextElement($output) <= $this->_limit){

			$output[] = $this->_getNextElement($output);
		}

		return $output;
	}

	/**
	 * @param array $output
	 * @return int
	 */
	private function _getNextElement(array $output){

		return array_sum(array_slice($output, - 2));
	}

	/**
	 * @param array $odds
	 * @return array
	 */
	private function _getNextTwoOddNumbersAssumingOOEOOESequence(array $odds){

		return array(end($odds) + array_sum($odds), end($odds) + array_sum($odds) + array_sum($odds));
	}
}

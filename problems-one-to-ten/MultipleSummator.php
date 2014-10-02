<?php

/**
 * Contains the MultipleSummator class
 *
 * @author Richard Harrison <riharrison@estee-lauder.co.uk>
 * @copyright Estee Lauder Companies Ltd. 2013
 * @since 1 Nov 2013
 */
class MultipleSummator {

	/**
	 * @var int
	 */
	private $_limit = 2;

	/**
	 * @var int
	 */
	private $_multiple1 = 1;

	/**
	 * @var int
	 */
	private $_multiple2 = 1;

	public function getSum(){

		return array_reduce(range(1, $this->_limit - 1), array($this, '_sumWhereMultiple'));
	}

	public function setLimit($limit){

		$this->_limit = $limit;
		return $this;
	}

	public function setMultiple1($multiple1){

		$this->_multiple1 = $multiple1;
		return $this;
	}

	public function setMultiple2($multiple2){

		$this->_multiple2 = $multiple2;
		return $this;
	}

	private function _sumWhereMultiple($total, $element){

		if($element % $this->_multiple1 && $element % $this->_multiple2){

			return $total;
		}
		else{

			return $element + $total;
		}
	}
}

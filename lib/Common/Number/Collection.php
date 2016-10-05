<?php

namespace Euler\Common\Number;

class Collection extends \Euler\Number\Collection {
	
	/**
	 *
	 * @var \Euler\Number\Collection
	 */
	protected $collection1;
	
	/**
	 *
	 * @var \Euler\Number\Collection
	 */
	protected $collection2;
	
	/**
	 *
	 * @param \Euler\Number\Collection $collection1        	
	 * @param \Euler\Number\Collection $collection2        	
	 */
	public function __construct(\Euler\Number\Collection $collection1, \Euler\Number\Collection $collection2) {
		$this->collection1 = $collection1;
		$this->collection2 = $collection2;
	}
	public function count() {
		return 0;
	}
	public function max() {
		return max ( $this->collection1->max (), $this->collection2->max () );
	}
	public function min() {
		return min ( $this->collection1->min (), $this->collection2->min () );
	}
	public function sum() {
		return 0;
	}
}
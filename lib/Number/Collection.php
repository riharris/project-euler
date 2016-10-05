<?php

namespace Euler\Number;

use Euler\Numerical, Euler\Ranged, Euler\Summable;

class Collection implements \Countable, Ranged, Summable {
	
	/**
	 *
	 * @var \Iterator $iterator
	 */
	protected $iterator;
	
	/**
	 *
	 * @param \Iterator $iterator        	
	 */
	public function __construct(\Iterator $iterator) {
		$this->iterator = $iterator;
	}
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see Countable::count()
	 */
	public function count() {
		$output = 0;
		
		foreach ( $this->iterator as $element ) {
			if ($element instanceof Numerical) {
				$output ++;
			}
		}
		
		return $output;
	}
	/**
	 *
	 * @return number
	 */
	public function max() {
		$output = 0;
		
		foreach ( $this->iterator as $element ) {
			if ($element instanceof Numerical && $element->value () > $output) {
				$output = $element->value ();
			}
		}
		
		return $output;
	}
	
	/**
	 *
	 * @return number
	 */
	public function min() {
		foreach ( $this->iterator as $element ) {
			if ($element instanceof Numerical) {
				
				if (! isset ( $output ) || $element->value () < $output) {
					
					$output = $element->value ();
				}
			}
		}
		
		return $output ?? 0;
	}
	
	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Euler\Summable::sum()
	 */
	public function sum() {
		$output = 0;
		
		foreach ( $this->iterator as $element ) {
			if ($element instanceof Numerical) {
				$output += $element->value ();
			}
		}
		
		return $output;
	}
}
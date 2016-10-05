<?php

namespace Euler;

class Range {
	protected $end;
	protected $pattern;
	protected $start;
	/**
	 *
	 * @param int $start        	
	 * @param int $end        	
	 */
	public function __construct(int $start, int $end) {
		$this->end = $end;
		$this->pattern = function ($value) {
			return true;
		};
		$this->start = $start;
	}
	public function forValuesMatching(\Closure $pattern) {
		$this->pattern = $pattern;
		return $this;
	}
	public function sum() {
		$output = 0;
		for($i = $this->start; $i <= $this->end; $i ++) {
			if (call_user_func ( $this->pattern, $i )) {
				$output += $i;
			}
		}
		return $output;
	}
}
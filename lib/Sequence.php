<?php

namespace Euler;

class Sequence {
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
		foreach ( $this->generate ( $this->start, $this->end ) as $i ) {
			if (call_user_func ( $this->pattern, $i )) {
				$output += $i;
			}
		}
		return $output;
	}
	protected function generate($start, $end) {
		while ( $start <= $end ) {
			yield $start ++;
		}
	}
}
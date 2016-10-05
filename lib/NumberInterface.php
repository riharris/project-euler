<?php

namespace Euler;

/**
 * Contains the NumberInterface interface
 *
 * @author Richard Harrison
 * @since 3 Oct 2014
 */
interface NumberInterface {
	
	/**
	 *
	 * @return string
	 */
	public function getValue();
	
	/**
	 *
	 * @param mixed $factor        	
	 * @return boolean
	 */
	public function isMultipleOf($factor);
	
	/**
	 *
	 * @return boolean
	 */
	public function isPalindromic();
	
	/**
	 *
	 * @return boolean
	 */
	public function isPrime();
}
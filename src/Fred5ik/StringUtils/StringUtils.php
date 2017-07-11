<?php
namespace Fred5ik\StringUtils;
/**
 * class used to manipulate string
 */
class StringUtils {
	/**
	 * @var string
	 */
	private $string = "";
	/**
	 * set string
	 */
	public function __construct($string) {
		$this->string = $string;
	}

	/**
	 * return the length of this string
	 * @return number
	 */
	public function length() {
		return strlen($this->string);
	}
	/**
	 * return true if, only if, length() is 0
	 * @return boolean
	 */
	public function isEmpty() {
		return $this->length() !== 0;
	}
	/**
	 * convert string to lower case, return converted string
	 * @return string
	 */
	public function toLowerCase() {
		$this->string = strtolower($this->string);
		return $this->string;
	}
	/**
	 * convert string to upper case, return converted string
	 * @return string
	 */
	public function toUpperCase() {
		$this->string = strtoupper($this->string);
		return $this->string;
	}
	/***
	 * return a string
	 * @return string
	 */
	public function __toString() {
		return $this->string;
	}

	
}
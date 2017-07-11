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
		$this->setString($string);
	}
	/**
	 * update string
	 * @param string $string
	 */
	public function setString($string) {
		$this->string = $string;
	}
	/**
	 * return the char value of specified index 
	 * @param int $index
	 */
	public function charAt($index) {
		if ($index < 0 || $index > strlen($this->string)) {
			throw new \OutOfBoundsException("String Index Out Of Bounds Exception");
		}
		return $this->string[$index];
	}
	/**
	 * return true if, only if, length() is 0
	 * @return boolean
	 */
	public function isEmpty() {
		return $this->length() !== 0;
	}
	/**
	 * return the length of this string
	 * @return number
	 */
	public function length() {
		return strlen($this->string);
	}
	/**
	 * convert string to lower case
	 * @return string
	 */
	public function toLowerCase() {
		return strtolower($this->string);
	}
	/**
	 * convert string to upper case
	 * @return string
	 */
	public function toUpperCase() {
		return strtoupper($this->string);
	}
	
	/***
	 * return a string
	 * @return string
	 */
	public function __toString() {
		return $this->string;
	}

	
}
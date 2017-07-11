<?php
namespace Fred5ik\StringUtils\Test;

use PHPUnit\Framework\TestCase;
use Fred5ik\StringUtils\StringUtils;

class StringUtilsTest extends TestCase {
	/**
	 * test function toLowerCase
	 */
	public function testToLowerCase() {
		
		$startString = "testStinG";
		$lowerString = strtolower($startString);
		
		$string = new StringUtils($startString);
		
		$this->assertEquals($lowerString, $string->toLowerCase());
	}
	public function testToUpperCase() {
		
		$startString = "testStinG";
		$upperString = strtoupper($startString);
		
		$string = new StringUtils($startString);
		
		$this->assertEquals($upperString, $string->toUpperCase());
	}
	
}
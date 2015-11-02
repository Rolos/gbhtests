<?php

class Palindrome{

	public static function isPalindrome($frase){

		//eliminate white spaces and convert phrase to lower case
		$frase = strtolower(preg_replace('/\s+/', '', $frase));

		//get the length of the string
		$length = strlen($frase);

		//expose the base case
		if($length <= 1) return true;

		//recursivelly determine if the string is a palindrome
		return $frase[0] === $frase[$length - 1] && self::isPalindrome(substr($frase, 1, -1 ));
	}
}
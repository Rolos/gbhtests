<?php

class FindRepeated{

	/**
	 * Using brute force here O(n^2)
	 */
	public static function find(array $array){

		//get the length of the array
		$n = count($array);

		//start iterating over the array
		for($i = 0; $i <= $n - 1; $i++){
			$num = $array[$i];
			for($x = 0; $x <= $n - 1; $x++){
				//found a match
				if($array[$i] === $array[$x] && $i !== $x) 
					return "Repeated number is " . $array[$x];
			}
		}
		return "No hay elementos repetidos";
	}
}
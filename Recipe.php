<?php

class Recipe{

	//initialize an static map of the ingredients
	private static $ingredients = [
		1 => "cafe" , 
		2 => "mantequilla" , 
		4 => "arroz", 
		8 => "habichuela", 
		16 => "yuca", 
		32 => "platanos", 
		64 => "pasta",
		128 => "guandules"
	];

	//this array holds all the found keys
	private static $found = [];

	public static function findRecipe($x){

		//error condition
		if($x > 256 || $x < 0) throw new Exception("Variable out of range");

		//get all the keys in the array
		$keys = array_keys(static::$ingredients);		

		$i = 0;
		//find the larger element that holds the nuber
		while($x > $keys[$i]) $i++;		

		while($x > 0 && $i > 0){			
			self::$found[] = $keys[$i] - $keys[$i]/2;
			$x -= $keys[$i];
			$i--;
		}		

		return static::getIngredientList();
	}

	public static function getIngredientList(){
		$out = "¡Tenemos una receta de ";
		foreach(self::$found as $one){
			$out .= static::$ingredients[$one] . ', ';
		}
		$out .= '<br>';
		return $out;
	}
}
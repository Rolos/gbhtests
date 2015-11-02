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
	private $found = [];

	private $r_number;

	public function __construct($number){
		$this->r_number = $number;
	}

	public function out(){

		//error condition
		if($this->r_number > 256 || $this->r_number < 0) throw new Exception("Variable out of range");

		//get all the keys in the array
		$keys = array_keys(static::$ingredients);		

		$i = 0;
		//find the larger element that holds the nuber
		while($this->r_number > $keys[$i]) $i++;		
		while($this->r_number > 0 && $i > 0){			
			$i--;
			$this->found[] = $keys[$i];
			$this->r_number -= $keys[$i];			
		}		

		return $this->getIngredientList();
	}

	public function getIngredientList(){
		$out = "¡Tenemos una receta de ";
		foreach($this->found as $one){
			$out .= static::$ingredients[$one] . ', ';
		}
		$out .= '<br>';
		return $out;
	}
}
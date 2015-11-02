<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

/**
 * Palindrome test cases
 */

echo "---------------PALINDROMOS-----------------------------<br>";

$cases = [ "Ana", "se van sus naves", "Esto no es un palíndromo"];

foreach ($cases as $case) {
	if(Palindrome::isPalindrome($case))
		echo "<strong>" . $case . "</strong> Es un Palindromo<br>";
	else
		echo "<strong>" . $case . "</strong> No es un Palindromo<br>";
}

/**
 * Find repeated number
 */
echo "<br>---------------FIND REPEATED NUMBER IN ARRAY-------------------<br>";

$array1 = [1, 4, 1, 3, 2, 5];
$array2 = [3, 1, 2, 2];

echo FindRepeated::find($array1) . '<br>';
echo FindRepeated::find($array2) . '<br>';

/**
 * Recipe
 */
echo "<br>---------------FIND THE RECIPE-------------------<br>";

echo Recipe::findRecipe(12);

/**
 * Design Patterns
 * PROBLEMA: Contar el numero de veces que se llama a un metodo especifico
 * SOLUCION: Para solucionar este problema utilizaremos el patron de diseño Singleton. Es el mas adecuado para este
 * ya que consiste en crear una sola instancia de una clase
 */
echo "<br>---------------DESIGN PATTERNS-------------------<br>";

$sing = Singleton::getInstance();
$sing->call();
$sing->call();
$sing->call();
$sing->call();

echo $sing->count();

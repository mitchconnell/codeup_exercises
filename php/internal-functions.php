<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check_if_empty() {
	unset($nothing);
		
	if(isset($nothing)) {
		return "$nothing is SET\n";
	}
	if(empty($nothing)) {
		return "$nothing is EMPTY\n";			
	}
	if(isset($something)) {
		return "$something is SET\n";
	}

}
$array_string = serialize($array);
echo $array_string;

$array = unserialize($array_string);
var_dump($array_string);
	
// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results
?>
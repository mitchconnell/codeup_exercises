<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a + $b;	
	} else {
		echo "ERROR: Both arguements must be numbers\n";
	}	
}
 	add (2,7);

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a - $b;
	} else {
		echo "ERROR: Both arguements must be numbers\n";
	}
}	
	subtract (2,9);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a * $b;
	} else {
		echo "ERROR: Both arguements must be numbers\n";
	}
}	

	multiply (3,5);

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a / $b;
	} else {
		echo "ERROR: Both arguements must be numbers\n";
	}
	if($b == 0) {
		echo "ERROR:\n";
		    
	}
}
divide (2,2);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	echo $a % $b;
	} else {
	echo "ERROR: Both arguements must be numbers\n";
	}
}

modulus (9,5);


?>
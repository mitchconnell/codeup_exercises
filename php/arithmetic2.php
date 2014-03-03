<?php

function add($a, $b) {
   
  if (is_numeric($a) && is_numeric($b)) {
        	return $a + $b . PHP_EOL;
      } else {
        	return NULL;
 			}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
        	return $a - $b . PHP_EOL;
      } else {
        	return NULL;
      }
}

function multiply($a, $b) {  
	if (is_numeric($a) && is_numeric($b)) {
        	return $a * $b . PHP_EOL;
    	} else {
        	return NULL;
 			}
}

function divide($a, $b) {    	
	if (is_numeric($a) && is_numeric($b)) {
		if($b == 0) {
		    	return false;
			} else {
					return $a / $b . PHP_EOL;
			}
			} else { 
					return 0;	
	    	
	    }
}

echo "False if divided by 0";

?>
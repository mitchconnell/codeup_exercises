<?php

$data = array('apple', 'banana', 5, 7 * 6, 88.0);

 foreach (data as $$item) {
 	if (is_numeric($item)) {
 		echo "{item} is a number\n";
 	}elseif (is_string($item)) {
 		echo "{item} is a string\n"
 		else {
 		echo "{item} is not a string or a number\n"
 		}
 	
 	 
 }
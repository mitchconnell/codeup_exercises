<?php

$instructors = array(
	array ('first_name' => 'Jason', 'last_name' => 'Straughan'),
	array ('first_name' => 'Isaac', 'last_name' => 'Castillo'),
);

         
 foreach ($instructors as $instructor) {
 	foreach ($instructor as $key => $name) {
 		if ($key =='first_name') {
 	echo "$name\n";
 }
}
}

 ?>
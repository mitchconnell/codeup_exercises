<?php
 
//create random numbers
$random = mt_rand(1 , 100);

$count = 0;
//ask user to input numbers

fwrite(STDOUT, "hey loser I'm thinking of a number\n");

//is it greater than

do { 
	
	$guess = fgets(STDIN);

	if ($guess > $random) {

		fwrite(STDOUT,"guess lower\n");
			
	} else {

   		fwrite(STDOUT, "guess higher\n");
    } 

    $count++;

 	
} while ($guess != $random);

echo "winner\n";

echo "You were wrong  $count  times\n"; 



	

//is it less than



//is it equal to



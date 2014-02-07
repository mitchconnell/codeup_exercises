<?php
 
//create random numbers
$random = rand(1 , 100);

//ask user to input numbers

fwrite(STDOUT, "hey loser I'm thinking of a number\n");

//is it greater than

do 
{ 
	$guess = fgets(STDIN);
	if ($guess > $random) {

	fwrite(STDOUT,"guess lower\n");
			# code...
		}	
    if ($guess < $random) {
    fwrite(STDOUT, "guess higher\n"); 	

    }

 	
 } while ($guess != $random); 
	


//is it less than



//is it equal to



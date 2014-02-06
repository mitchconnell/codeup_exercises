<?php
$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if ($x < $y && $y < $z)
{
	echo "{$x} < {$y} < {$z}\n";
}

if ($x > 0 || $x < 10) 
{
	echo "{$x} > {0} < {10}\n";
}

if ($x > 0 && 0 < 10) 
{
	echo "{$x} > {0} < {10}\n";
}
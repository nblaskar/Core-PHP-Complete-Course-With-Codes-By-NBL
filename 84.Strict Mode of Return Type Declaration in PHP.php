<?php
	//Enable Strict Mode
	declare(strict_types=1);
	//Example-2
	function add(int $a, int $b):float
	{	echo '$a is '. gettype($a) . " type variable and value = $a <br/>";
		echo '$b is '. gettype($b) . " type variable and value = $b <br/>";
		return($a+$b);
	}	
	$sum= add(2,4);
	echo gettype($sum) . " " . $sum;
	// echo add(2.5,1.2);
	// echo add(2,"Hello");

	
?> 
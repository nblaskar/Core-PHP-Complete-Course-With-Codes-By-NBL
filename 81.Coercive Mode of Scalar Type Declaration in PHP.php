<?php
	/*
	
	//gettype() function
	$a=34;
	echo gettype($a);
	$b="Hello";
	echo gettype($b);
	
	//Example-1	
	function add(int $a, int $b)
	{	
		return($a+$b);
	}	
	//echo add(2,3);
	//echo add(2.5,3.2);
	//echo add(2,"Hello");
	//echo add(2,"25"); 
	echo add(2,"25 Hello");
	
	//Example-2	
	function add(int $a, int $b)
	{	echo '$a is '. gettype($a) . " type variable and value = $a <br/>";
		echo '$b is '. gettype($b) . " type variable and value = $b <br/>";
		return($a+$b);
	}	
	//echo add(2,4);
	// echo add(2.5,3.2);
	// echo add(2,"Hello");
	// echo add(2,"25"); 
	echo add(2,"25 Hello");
	*/
	
	//Example-3
	function add(string $a, string $b)
	{	echo '$a is '. gettype($a) . " type variable and value = $a <br/>";
		echo '$b is '. gettype($b) . " type variable and value = $b <br/>";
		return($a.$b);
	}	
	// echo add(2,4);
	// echo add(2.5,3.2);
	// echo add(2,"Hello");
	// echo add(2,"25"); 
	echo add(2,"25 Hello");

	
?> 
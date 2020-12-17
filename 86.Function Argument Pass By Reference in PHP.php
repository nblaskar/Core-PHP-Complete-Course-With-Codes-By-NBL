<?php
	$n=2;
	echo "Value of n=$n<br/>";
	function add(&$a)
	{
		echo "Value inside function Before Assignment=$a<br/>";
		$a=4; 
		echo "Value inside function After Assignment=$a<br/>";
	}
	add($n); 
	echo "Value of n=$n<br/>";

	
?> 
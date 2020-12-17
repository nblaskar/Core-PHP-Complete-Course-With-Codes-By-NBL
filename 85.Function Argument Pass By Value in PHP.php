<?php
	$n=2;
	echo "Value of n=$n<br/>";
	function add($a) //$n=$a=2
	{
		echo "Value inside function Before Assignment=$a<br/>";
		$a=4; //$n=4
		echo "Value inside function After Assignment=$a<br/>";
	}
	add($n); //$n=2
	echo "Value of n=$n<br/>";

	
?> 
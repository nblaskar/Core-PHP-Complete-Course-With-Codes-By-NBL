<?php
	//Recursive Function
	function recur($a)
	{
		if($a<=10)
		{
			echo "$a <br/>";
			recur($a+1);
		}
	}
	recur(1);
	

?> 
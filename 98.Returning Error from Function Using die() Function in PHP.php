<?php
	//Returning Errors from Function
	echo "First Line<br/>";
	function disp($a)
	{
		if($a<=10)
		{
			echo "$a<br/>";
			return TRUE;
		}
		// else
			// return FALSE;
	}
	
	//disp(2) or die("Error:Enter Valid Number");
	//echo "Last Line<br/>";
	

	
	disp(29) or die("Error:Enter Valid Number");
	echo "Last Line<br/>";
	

?> 
<?php


	// Simple and Normal Nested if Statement
	/*
	if(10>2)
	{
		echo "Main 1 <br/>";
		if(10>5)
		{
			echo "Nested Code Executed 1 <br/>";
		}
		if(20>5)
		{
			echo "Nested Code Executed 2 <br/>";
		}
	}
	if(10>5)
	{
		echo "Main 2<br/>";
	}
	echo "Rest of the Code";
	
	*/
	
	
	// Advance Nested if Statement in PHP
	if(10>2):
		echo "Main 1 <br/>";
		if(10>5):
			echo "Nested Code Executed 1 <br/>";
		endif;
		if(20>5):
			echo "Nested Code Executed 2 <br/>";
		endif;
	endif;
	if(10>5):
		echo "Main 2<br/>";
	endif;
	echo "Rest of the Code";
	
	
?>
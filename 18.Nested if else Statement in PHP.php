<?php


	// Simple and Normal Nested if else Statement
	/*
	if(10>2)
	{
		echo "Main Condition is True <br/>";
		if(10>5)
		{
			echo "Nested Condition is True <br/>";
		}
		else
		{
			echo "Nested Condition is False <br/>";
		}
	}
	else
	{
		echo "Main Condition is False<br/>";
	}
	echo "Rest of the Code";
	
	*/
	// Simple and Normal Nested if else Statement

	if(10>2):
		echo "Main Condition is True <br/>";
		if(10>5):
			echo "Nested Condition is True <br/>";
		else:
			echo "Nested Condition is False <br/>";
		endif;
	else:
		echo "Main Condition is False<br/>";
	endif;
	echo "Rest of the Code";
	
	
	
	
?>
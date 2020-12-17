<?php
/*
	//Wrong Way
	display();
	if(TRUE)
	{
		function display()
		{
			echo "Conditional Function";
		}
	}
	*/
	
	//Correct Way
	if(TRUE)
	{
		function display()
		{
			echo "Conditional Function";
		}
	}
	display();
	

?> 
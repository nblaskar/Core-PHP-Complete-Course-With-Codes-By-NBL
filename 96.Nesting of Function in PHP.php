<?php
	//Nesting of Function
	function outer_show()//Outer Function
	{
		echo "I am Outer Function <br/>";
		function inner_show() //Inner Function
		{
			echo "I am Inner Function <br/>";
		}
	}
	outer_show();
	inner_show();
	
	// outer_show();
	

?> 
<?php
/*
	$a=10;//Global Variable
	function display()
	{
		echo "Value of inside Function=$a <br/>";
	}
	display();
	echo "Value of outside Function=$a <br/>";
	*/
	
	$a=10;//Global Variable
	function display()
	{
		global $a;//defining its global
		echo "Value of inside Function=$a <br/>";
	}
	display();
	echo "Value of outside Function=$a <br/>";
	
	
	
?> 
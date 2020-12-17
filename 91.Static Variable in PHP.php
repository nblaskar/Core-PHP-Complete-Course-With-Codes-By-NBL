<?php
	//With Static
	function displays()
	{
		static $a=0;//static variable
		$a++;
		return $a;
	}
	echo "With Static" . "<br/>";
	echo displays() . "<br/>";
	echo displays() . "<br/>";
	echo displays() . "<br/>";

	
	//Without Static
	function display()
	{
		$a=0;
		$a++;
		return $a;
	}
	echo "Without Static" . "<br/>";
	echo display() . "<br/>";
	echo display() . "<br/>";
	echo display() . "<br/>";

	
	
	
?> 
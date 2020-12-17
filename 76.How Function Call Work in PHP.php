<?php
	echo "First Line <br/>";
	//Function Call Before Declaration
	display();
	echo "Second Line <br/>";
	function display()
	{
		echo "Welcome to PHP<br/>";
	}
	//Function Call After Declaration
	display();
	echo "Third Line <br/>";
	echo "Last Line <br/>";
	
?> 
<?php
	/*
	//Standard While Loop Structure
	$num=1;
	while($num<=5)
	{
		echo "Count: $num<br/>";
		$num++;	
	}
	echo "Rest of the Code";
	
	
	//Advance While Loop Structure in PHP
	$num=1;
	while($num<=5):
		echo "Count: $num<br/>";
		$num++;	
	endwhile;
	echo "Rest of the Code";
	*/
	
	//We use While Loop when we dont know the number opf execuytion of the statement
	$num=1;
	while(TRUE)
	{
		echo "Count: $num<br/>";
		$num++;	
		if($num == 5)
			break;
	}
	echo "Rest of the Code";
?>
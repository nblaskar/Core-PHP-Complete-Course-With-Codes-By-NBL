<?php
	/*
	//Normal elseif Statement
	$price = 100;
	if($price>40)
	{
		echo "If Condition is True <br/>";
	}
	elseif($price > 30)
	{
		echo "1st Else If Condition is True<br/>";
	}
	elseif($price > 20)
	{
		echo "2nd Else If Condition is True<br/>";
	}
	else 
	{
		echo "All Conditions Are False";
	}
	echo "End of the Codes";
	*/
	
	
	//Advance elseif Statement in PHP
	$price = 25;
	if($price>40):
		echo "If Condition is True <br/>";
	elseif($price > 30):
		echo "1st Else If Condition is True<br/>";
	elseif($price > 20):
		echo "2nd Else If Condition is True<br/>";
	else:
		echo "All Conditions Are False";
	endif;
	echo "End of the Codes";
	
?>
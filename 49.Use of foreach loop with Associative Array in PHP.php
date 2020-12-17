<?php

	$fees=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	//To Access The Values of Associative Array
	//Process-1
	foreach($fees as $money)
	{
		echo $money . "<br/>";
	}	
	//Process-2
	foreach($fees as $money):
		echo $money . "<br/>";
	endforeach;
	
	//To Access The Keys and Values of Associative Array
	//Process-1
	foreach($fees as $keys=>$money)
	{
		echo $keys . " " . $money . "<br/>";
	}	
	//Process-2
	foreach($fees as $keys=>$money):
		echo $keys . " " . $money . "<br/>";
	endforeach;
	
	


?>
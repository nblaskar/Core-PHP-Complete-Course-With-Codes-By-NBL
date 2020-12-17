<?php
	/*
	//Associative Array with Single Key/Value
	$fees["Rahul"]=500;
	echo $fees["Rahul"];
	echo "Rahul fees: " . $fees["Rahul"];
	echo "Rahul fees: " , $fees["Rahul"];
	echo "Rahul fees: {$fees["Rahul"]}";
	
	
	//Associative Array with Multiple Key/Value
	$fees["Rahul"]=500;
	$fees["Sonam"]=300;
	$fees["Sumit"]=600;
	$fees["Priti"]=700;
	echo $fees["Rahul"];
	echo "Sonam fees: " . 	$fees["Sonam"];
	echo "Sumit fees: " , $fees["Sumit"];
	echo "Priti fees: {$fees["Priti"]}";
	*/
	
	
	//Associative Array with Multiple Key/Value in a single line With Array Function
	$fees=array("Rahul"=>500,"Sonam"=>300,"Sumit"=>600,"Priti"=>700);
	echo $fees["Rahul"];
	echo "Sonam fees: " . 	$fees["Sonam"];
	echo "Sumit fees: " , $fees["Sumit"];
	echo "Priti fees: {$fees["Priti"]}";
	
?>
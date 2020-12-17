<?php
	//Multidimentional Associative Array
	//-->Short Structured Array
	
	$fees=array(
		"Rahul"=>array("php"=>10,"Java"=>20,"CSS"=>30),
		"Sonam"=>array("php"=>30,"Java"=>40,"CSS"=>10),
		"Sumit"=>array("php"=>50,"Java"=>60,"CSS"=>40)
		
		);
		
		
	//-->Descriptive Structured Array
	$fees["Rahul"]["php"]=10;
	$fees["Rahul"]["Java"]=20;
	$fees["Rahul"]["CSS"]=30;

	$fees["Sonam"]["php"]=30;
	$fees["Sonam"]["Java"]=40;
	$fees["Sonam"]["CSS"]=10;

	$fees["Sumit"]["php"]=50;
	$fees["Sumit"]["Java"]=60;
	$fees["Sumit"]["CSS"]=40;
	
	
	// To access these types of arrays as 
	echo $fees["Rahul"]["php"];
	echo $fees["Sumit"]["Java"];
	echo $fees["Sonam"]["CSS"];

	
	

?>
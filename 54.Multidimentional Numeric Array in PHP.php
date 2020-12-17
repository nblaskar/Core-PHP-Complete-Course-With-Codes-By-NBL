<?php
	//Multidimentional Numeric Array
	//-->Short Structured Array
	$laptop=array(
		array("Rahul","dell",10),
		array("Sonam","Hp",20),
		array("Sumit","Zed",30)
		);
		/*
	//-->Descriptive Structured Array
	$laptop[0][]="Rahul";
	$laptop[0][]="dell";
	$laptop[0][]=10;

	$laptop[1][]="Sonam";
	$laptop[1][]="Hp";
	$laptop[1][]=20;

	$laptop[2][]="Sumit";
	$laptop[2][]="Zed";
	$laptop[2][]=30;*/
	// To access these types of arrays as 
	echo $laptop[1][2];
	echo $laptop[2][0];
	echo $laptop[0][0];

?>
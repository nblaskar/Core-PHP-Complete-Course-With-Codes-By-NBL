<?php
	//Multidimentional Numeric Array
	//-->Short Structured Array
	/*
	$laptop=array(
		array("Rahul","dell",10),
		array("Sonam","Hp",20),
		array("Sumit","Zed",30)
		);
		*/
	//-->Descriptive Structured Array
	$laptop[0][]="Rahul";
	$laptop[0][]="dell";
	$laptop[0][]=10;

	$laptop[1][]="Sonam";
	$laptop[1][]="Hp";
	$laptop[1][]=20;

	$laptop[2][]="Sumit";
	$laptop[2][]="Zed";
	$laptop[2][]=30;
	// To access these types of arrays as 
	
	//To access the Values
	foreach($laptop as $values)
	{
		foreach($values as $items)
		{
			echo $items . " ";
		}
		echo "<br/>";
	}
	//To access the Keys and Values
	foreach($laptop as $keys=>$values)
	{
		foreach($values as $key=>$items)
		{
			echo $keys . " ". $key . " " . $items . " ";
		}
		echo "<br/>";
	}
		
		

?>
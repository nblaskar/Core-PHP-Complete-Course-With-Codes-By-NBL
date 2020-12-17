<?php

	$fees=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);

	//To Access the Keys of Associative Arrays
	$keys=array_keys($fees);
	for($i=0;$i<count($keys);$i++)
	{
			echo $keys[$i] . "<br/>";
	}
	
	//To Access the Values of Associative Arrays
	$keys=array_keys($fees);
	for($i=0;$i<count($keys);$i++)
	{
			echo "$keys[$i] = " . $fees["$keys[$i]"] . "<br/>";
	}
	


?>
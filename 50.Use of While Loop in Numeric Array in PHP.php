<?php

	$name=array("Rahul","Sonam","Sumit","Priti");
	$i=0;
	//Process-1
	while($i<count($name))
	{
		echo $name[$i] . "<br/>";
		$i++;
	}

	//Process-2
	$i=0;
	while($i<count($name)):
		echo $name[$i] . "<br/>";
		$i++;
	endwhile;

	


?>
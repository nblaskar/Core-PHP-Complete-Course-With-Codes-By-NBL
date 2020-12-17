<?php

	$name=array("Rahul","Sonam","Sumit","Priti");
	//Process-1
	/*
	foreach($name as $value){
		echo $value . "<br/>";
	}
	*/
	
	//Process-2 
	foreach($name as $value):
		echo $value . "<br/>";
	endforeach;


?>
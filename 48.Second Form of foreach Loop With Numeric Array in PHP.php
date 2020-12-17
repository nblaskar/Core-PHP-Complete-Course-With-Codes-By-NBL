<?php

	$name=array("Rahul","Sonam","Sumit","Priti");
	//Process-1
	
	foreach($name as $key => $value){
		echo $key . " " . $value . "<br/>";
	}
	
	
	//Process-2 
	foreach($name as $key => $value):
		echo $key . " " . $value . "<br/>";
	endforeach;


?>
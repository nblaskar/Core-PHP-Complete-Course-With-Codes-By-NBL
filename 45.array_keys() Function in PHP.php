<?php

	$fees=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	/*
	//Process-1
	$keys=array_keys($fees);
	echo $keys[0] . "<br/>";
	for($i=0;$i<=2;$i++)
	{
			echo $keys[$i] . "<br/>";
	}
	
	
	//Process-2
	$keys=array_keys($fees,500);
	echo $keys[0] . "<br/>";
	
	*/
	//Process-3
	$keys=array_keys($fees,700,true);
	echo $keys[0] . "<br/>";
	
	

?>
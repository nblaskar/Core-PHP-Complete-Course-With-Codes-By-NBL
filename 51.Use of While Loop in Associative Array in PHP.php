<?php

	$fees=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$keys=array_keys($fees);
	//Process-1
	$i=0;
	while($i<count($keys))
	{
		echo $keys[$i] . " " . $fees[$keys[$i]] . "<br/>";
		$i++;
	}
		
	//Process-2
	$i=0;
	while($i<count($keys)):
		echo $keys[$i] . " " . $fees[$keys[$i]] . "<br/>";
		$i++;
	endwhile

	


?>
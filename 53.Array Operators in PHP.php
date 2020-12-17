<?php
	/*
	//(1)Union(+) OPerator
	$a=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$b=array("Rahul"=>"PHP","Sonam"=>"Java","Sumit"=>"CSS","JK"=>"Book");
	//$result1=$a+$b;
	//print_r($result1);
	$result2=$b+$a;
	print_r($result2);
	
	
	
	//(2)Equality(==)Operator 
	$a=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$x=array("Rahul"=>"PHP","Sonam"=>"Java","Sumit"=>"CSS","JK"=>"Book");
	$b=array("Sumit"=>700,"Sonam"=>600,"Rahul"=>500);
	if($a==$x):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False<br/>";
	endif;
	if($a==$b):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False";
	endif;	
	
	
	
	//(3)Identity(===)Operator 
	$a=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$x=array("Rahul"=>"PHP","Sonam"=>"Java","Sumit"=>"CSS","JK"=>"Book");
	$b=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	if($a===$x):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False<br/>";
	endif;
	if($a===$b):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False";
	endif;
	
	
	
	//(4)Inequality(!=/<>)Operator 
	$a=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$x=array("Rahul"=>"PHP","Sonam"=>"Java","Sumit"=>"CSS","JK"=>"Book");
	$b=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	//if($a!=$x):
	if($a<>$x):
		echo "Both Array Key/Value Pair True<br/>";
	else:
		echo "Key/Value Pair False<br/>";
	endif;
	//if($a<>$b):
	if($a!=$b):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False";
	endif;	*/
	
	
	//(5)Non-Identity(!==)Operator 
	$a=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	$x=array("Rahul"=>"PHP","Sonam"=>"Java","Sumit"=>"CSS","JK"=>"Book");
	$b=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
	if($a!==$x):
		echo "Both Array Key/Value Pair True<br/>";
	else:
		echo "Key/Value Pair False<br/>";
	endif;
	if($a!==$b):
		echo "Both Array Key/Value Pair True";
	else:
		echo "Key/Value Pair False";
	endif;
	


?>
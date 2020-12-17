<?php
//Array Datas
	$name=array("Rahul","Sonam","Sumit","Priti");
	//or
	/*
	$name[0]="Rahul";
	$name[1]="Sonam";
	$name[2]="Sumit";
	$name[3]="Priti";
	
	//Process-1
	for($i=0;$i<=3;$i++)
	{
		echo $name[$i] . "<br/>";
	}
	*/
	//Process-2
	for($i=0;$i<count($name);$i++)
	{
		echo "\$name[$i] = " . $name[$i] . "<br/>";
	}
?>
<?php
/*
	//Uses of fgets()
	$handle=fopen("103.test.txt","r");
	echo fgets($handle);
*/
	//To read all text of a file
	$handle=fopen("103.test.txt","r");
	while(!feof($handle))
	{
		$data=fgets($handle);
		echo "$data";
	}




?> 